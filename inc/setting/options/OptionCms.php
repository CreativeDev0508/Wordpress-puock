<?php

namespace Puock\Theme\setting\options;

class OptionCms extends BaseOptionItem{

    function get_fields(): array
    {
        return [
            'key' => 'cms',
            'label' => __('CMS布局', PUOCK),
            'icon'=>'czs-layers',
            'fields' => [
                [
                    'id' => 'cms_show_new',
                    'label' => __('显示最新文章', PUOCK),
                    'type' => 'switch',
                    'sdt' => true,
                ],
                [
                    'id' => 'cms_show_new_num',
                    'label' => __('最新文章数量', PUOCK),
                    'type' => 'number',
                    'sdt' => 6,
                    'showRefId' => 'cms_show_new',
                ],
                [
                    'id' => 'cms_show_2box',
                    'label' => __('显示CMS两栏布局', PUOCK),
                    'type' => 'switch',
                    'sdt' => true,
                ],
                [
                    'id' => 'cms_show_2box_id',
                    'label' => __('CMS两栏布局分类ID', PUOCK),
                    'type' => 'select',
                    'sdt' => '',
                    'multiple' => true,
                    'showRefId' => 'cms_show_2box',
                    'options' => self::get_category(),
                ],
                [
                    'id' => 'cms_show_2box_num',
                    'label' => __('CMS两栏布局每栏数量', PUOCK),
                    'type' => 'number',
                    'sdt' => 6,
                    'showRefId' => 'cms_show_2box',
                ],
            ],
        ];
    }
}
