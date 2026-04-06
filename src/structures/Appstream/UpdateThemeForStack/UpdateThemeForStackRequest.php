<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateThemeForStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property list<Shapes\ThemeFooterLink>|null $FooterLinks
 * @property string|null $TitleText
 * @property 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED'|null $ThemeStyling
 * @property Shapes\S3Location|null $OrganizationLogoS3Location
 * @property Shapes\S3Location|null $FaviconS3Location
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property list<'FOOTER_LINKS'>|null $AttributesToDelete
 */
class UpdateThemeForStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     FooterLinks?: list<Shapes\ThemeFooterLink>|null,
     *     TitleText?: string|null,
     *     ThemeStyling?: 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED'|null,
     *     OrganizationLogoS3Location?: Shapes\S3Location|null,
     *     FaviconS3Location?: Shapes\S3Location|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     AttributesToDelete?: list<'FOOTER_LINKS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
