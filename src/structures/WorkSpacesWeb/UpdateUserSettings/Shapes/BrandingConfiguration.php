<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageMetadata $logo
 * @property ImageMetadata $wallpaper
 * @property ImageMetadata $favicon
 * @property array<'de-DE'|'en-US'|'es-ES'|'fr-FR'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'zh-CN'|'zh-TW', LocalizedBrandingStrings> $localizedStrings
 * @property 'Light'|'Dark' $colorTheme
 * @property string|null $termsOfService
 */
class BrandingConfiguration extends Shape
{
    /**
     * @param array{
     *     logo: ImageMetadata,
     *     wallpaper: ImageMetadata,
     *     favicon: ImageMetadata,
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
