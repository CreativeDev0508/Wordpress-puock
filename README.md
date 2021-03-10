中文 | [English](./README_EN.md)
## 介绍
![cover](./cover.png)

<div align="center">
    <h1>WordPress Theme - Puock</h1>
    <p>一款基于WordPress开发的高颜值的自适应主题，支持白天与黑夜模式。</p>
      <a href="https://github.com/Licoy/wordpress-theme-puock/releases/latest">
        <img src="https://img.shields.io/github/v/release/Licoy/wordpress-theme-puock.svg?logo=git&style=for-the-badge" alt="Release-Version">
      </a>
    <a href="https://github.com/Licoy/wordpress-theme-puock">
        <img src="https://img.shields.io/badge/WordPress-V5.0+-0099CC.svg?logo=wordpress&style=for-the-badge" alt="WordPress-Version">
      </a>
    <a href="https://github.com/Licoy/wordpress-theme-puock">
        <img src="https://img.shields.io/badge/PHP-V7.0+-666699.svg?logo=php&style=for-the-badge" alt="PHP-Version">
      </a>
     <a href="https://gitee.com/licoy/wordpress-theme-puock">
        <img src="https://img.shields.io/badge/Gitee-%E7%A0%81%E4%BA%91-CC3333.svg?style=for-the-badge" alt="Gitee">
      </a>
    <a href="https://github.com/Licoy">
        <img src="https://img.shields.io/badge/author-Licoy-ff69b4.svg?style=for-the-badge" alt="Author">
      </a>
</div>

## 安装
请到 [发行版本](https://github.com/Licoy/wordpress-theme-puock/releases) 中进行下载最新版本，然后到WordPress管理后台中的「外观」-「主题」中点击「添加」，选择Puock的主题包进行上传安装并启用即可。

**提示：为了防止主题不兼容，请在安装主题前进行数据备份，防止数据字段重复覆盖等情况发生。**

## 版本迭代
- 1.5及以下版本升级至1.6+配置不兼容处理方法：

因为在1.6版本中将配置字段更改为了`puock_options`，所以会导致配置读取不到，用户可以重新进行配置或恢复配置，恢复配置SQL（**执行前请先备份数据库，原配置字段名为`optionsframework`，~~若其他主题或插件使用了同名字段为配置名则会覆盖~~，原则上若使用旧版本不会存在其他插件或主题同名字段，因为`option_name`字段为主键，是不允许重复的！**）：
```sql
UPDATE `wp_options` SET `option_name` = 'puock_options' WHERE `option_name` = 'optionsframework'
```
  
## 主题特性
- [x] 支持白天与暗黑模式
- [x] 全局无刷新加载
- [x] 支持博客与CMS布局
- [x] 内置WP优化策略
- [x] 一键全站变灰
- [x] 网页压缩成一行
- [x] 后台防恶意登录
- [x] 内置出色的SEO功能
- [x] 评论Ajax加载
- [x] 文章点赞、打赏
- [x] 支持Twemoji集成
- [x] 支持QQ登录
- [x] 丰富的广告位
- [x] 丰富的小工具
- [x] 自动百度链接提交
- [x] 众多页面模板
- [x] 支持评论可见
- [x] 支持密码可见
- [x] 支持Dplayer播放器
- [x] 简约快捷的后台配置
- [x] 更多功能，等你的[提议](https://github.com/Licoy/wordpress-theme-puock/issues)
## 文档
- 主题使用文档：[立即使用](https://www.licoy.cn/puock-doc.html)
- 建议或BUG反馈：[立即进入](https://github.com/Licoy/wordpress-theme-puock/issues)
- **若您有任何建议或BUG发现，并且您也有解决或实现的思路，欢迎直接提交PR！**
## 支持
- 打赏主题以支持：[点我进入](https://licoy.cn/go/zs/)
## 趋势
[![Stargazers over time](https://starchart.cc/Licoy/wordpress-theme-puock.svg)](https://starchart.cc/Licoy/wordpress-theme-puock)
## 鸣谢
[Jetbrains](https://www.jetbrains.com/?from=wordpress-theme-puock)
## 开源协议
- [GPL V3.0](./LICENSE)
- 请遵守开源协议，保留主题底部的署名
