<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IconImageInput|null $logo
 * @property WallpaperImageInput|null $wallpaper
 * @property IconImageInput|null $favicon
 * @property array<'de-DE'|'en-US'|'es-ES'|'fr-FR'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'zh-CN'|'zh-TW', LocalizedBrandingStrings>|null $localizedStrings
 * @property 'Light'|'Dark'|null $colorTheme
 * @property string|null $termsOfService
 */
class BrandingConfigurationUpdateInput extends Shape
{
    /**
     * @param array{
     *     logo?: IconImageInput|null,
     *     wallpaper?: WallpaperImageInput|null,
     *     favicon?: IconImageInput|null,
     *     localizedStrings?: array<'de-DE'|'en-US'|'es-ES'|'fr-FR'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'zh-CN'|'zh-TW', LocalizedBrandingStrings>|null,
     *     colorTheme?: 'Light'|'Dark'|null,
     *     termsOfService?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
