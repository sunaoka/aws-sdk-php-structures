<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplateFromLibrary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $phoneNumber
 * @property array<string, string>|null $url
 * @property string|null $otpType
 * @property bool|null $zeroTapTermsAccepted
 * @property list<array<string, string>>|null $supportedApps
 */
class LibraryTemplateButtonInput extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     phoneNumber?: string|null,
     *     url?: array<string, string>|null,
     *     otpType?: string|null,
     *     zeroTapTermsAccepted?: bool|null,
     *     supportedApps?: list<array<string, string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
