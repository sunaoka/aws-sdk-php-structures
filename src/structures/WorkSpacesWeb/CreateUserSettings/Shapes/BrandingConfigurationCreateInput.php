<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IconImageInput $logo
 * @property WallpaperImageInput|null $wallpaper
 * @property IconImageInput $favicon
 * @property array<'de-DE'|'en-US'|'es-ES'|'fr-FR'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'zh-CN'|'zh-TW', LocalizedBrandingStrings> $localizedStrings
 * @property 'Light'|'Dark' $colorTheme
 * @property string|null $termsOfService
 */
class BrandingConfigurationCreateInput extends Shape
{
    /**
     * @param array{
     *     logo: IconImageInput,
     *     wallpaper?: WallpaperImageInput|null,
     *     favicon: IconImageInput,
     *     localizedStrings: array<'de-DE'|'en-US'|'es-ES'|'fr-FR'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'zh-CN'|'zh-TW', LocalizedBrandingStrings>,
     *     colorTheme: 'Light'|'Dark',
     *     termsOfService?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
