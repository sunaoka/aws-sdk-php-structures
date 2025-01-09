<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeThemeForStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackName
 * @property 'ENABLED'|'DISABLED' $State
 * @property string $ThemeTitleText
 * @property 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED' $ThemeStyling
 * @property list<ThemeFooterLink> $ThemeFooterLinks
 * @property string $ThemeOrganizationLogoURL
 * @property string $ThemeFaviconURL
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class Theme extends Shape
{
    /**
     * @param array{
     *     StackName?: string,
     *     State?: 'ENABLED'|'DISABLED',
     *     ThemeTitleText?: string,
     *     ThemeStyling?: 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED',
     *     ThemeFooterLinks?: list<ThemeFooterLink>,
     *     ThemeOrganizationLogoURL?: string,
     *     ThemeFaviconURL?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
