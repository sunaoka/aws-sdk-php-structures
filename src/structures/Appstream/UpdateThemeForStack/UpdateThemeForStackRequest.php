<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateThemeForStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property list<Shapes\ThemeFooterLink> $FooterLinks
 * @property string $TitleText
 * @property 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED' $ThemeStyling
 * @property Shapes\S3Location $OrganizationLogoS3Location
 * @property Shapes\S3Location $FaviconS3Location
 * @property 'ENABLED'|'DISABLED' $State
 * @property list<'FOOTER_LINKS'> $AttributesToDelete
 */
class UpdateThemeForStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     FooterLinks?: list<Shapes\ThemeFooterLink>,
     *     TitleText?: string,
     *     ThemeStyling?: 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED',
     *     OrganizationLogoS3Location?: Shapes\S3Location,
     *     FaviconS3Location?: Shapes\S3Location,
     *     State?: 'ENABLED'|'DISABLED',
     *     AttributesToDelete?: list<'FOOTER_LINKS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
