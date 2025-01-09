<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeManagedLoginBranding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAVICON_ICO'|'FAVICON_SVG'|'EMAIL_GRAPHIC'|'SMS_GRAPHIC'|'AUTH_APP_GRAPHIC'|'PASSWORD_GRAPHIC'|'PASSKEY_GRAPHIC'|'PAGE_HEADER_LOGO'|'PAGE_HEADER_BACKGROUND'|'PAGE_FOOTER_LOGO'|'PAGE_FOOTER_BACKGROUND'|'PAGE_BACKGROUND'|'FORM_BACKGROUND'|'FORM_LOGO'|'IDP_BUTTON_ICON' $Category
 * @property 'LIGHT'|'DARK'|'DYNAMIC' $ColorMode
 * @property 'ICO'|'JPEG'|'PNG'|'SVG'|'WEBP' $Extension
 * @property string $Bytes
 * @property string $ResourceId
 */
class AssetType extends Shape
{
    /**
     * @param array{
     *     Category: 'FAVICON_ICO'|'FAVICON_SVG'|'EMAIL_GRAPHIC'|'SMS_GRAPHIC'|'AUTH_APP_GRAPHIC'|'PASSWORD_GRAPHIC'|'PASSKEY_GRAPHIC'|'PAGE_HEADER_LOGO'|'PAGE_HEADER_BACKGROUND'|'PAGE_FOOTER_LOGO'|'PAGE_FOOTER_BACKGROUND'|'PAGE_BACKGROUND'|'FORM_BACKGROUND'|'FORM_LOGO'|'IDP_BUTTON_ICON',
     *     ColorMode: 'LIGHT'|'DARK'|'DYNAMIC',
     *     Extension: 'ICO'|'JPEG'|'PNG'|'SVG'|'WEBP',
     *     Bytes?: string,
     *     ResourceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
