<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateThemeForStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property list<Shapes\ThemeFooterLink>|null $FooterLinks
 * @property string $TitleText
 * @property 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED' $ThemeStyling
 * @property Shapes\S3Location $OrganizationLogoS3Location
 * @property Shapes\S3Location $FaviconS3Location
 */
class CreateThemeForStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     FooterLinks?: list<Shapes\ThemeFooterLink>|null,
     *     TitleText: string,
     *     ThemeStyling: 'LIGHT_BLUE'|'BLUE'|'PINK'|'RED',
     *     OrganizationLogoS3Location: Shapes\S3Location,
     *     FaviconS3Location: Shapes\S3Location
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
