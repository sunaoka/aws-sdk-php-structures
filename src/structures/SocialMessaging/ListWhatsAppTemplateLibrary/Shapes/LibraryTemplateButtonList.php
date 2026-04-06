<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppTemplateLibrary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $text
 * @property string|null $phoneNumber
 * @property string|null $url
 * @property string|null $otpType
 * @property bool|null $zeroTapTermsAccepted
 * @property list<array<string, string>>|null $supportedApps
 */
class LibraryTemplateButtonList extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     text?: string|null,
     *     phoneNumber?: string|null,
     *     url?: string|null,
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
