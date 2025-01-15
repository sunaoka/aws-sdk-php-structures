<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateThemeForStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackName
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property string|null $ThemeTitleText
 * @property 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED'|null $ThemeStyling
 * @property list<ThemeFooterLink>|null $ThemeFooterLinks
 * @property string|null $ThemeOrganizationLogoURL
 * @property string|null $ThemeFaviconURL
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class Theme extends Shape
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     ThemeTitleText?: string|null,
     *     ThemeStyling?: 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED'|null,
     *     ThemeFooterLinks?: list<ThemeFooterLink>|null,
     *     ThemeOrganizationLogoURL?: string|null,
     *     ThemeFaviconURL?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
