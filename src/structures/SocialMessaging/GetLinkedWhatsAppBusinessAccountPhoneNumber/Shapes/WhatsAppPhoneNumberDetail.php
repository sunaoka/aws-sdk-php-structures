<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetLinkedWhatsAppBusinessAccountPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $phoneNumber
 * @property string $phoneNumberId
 * @property string $metaPhoneNumberId
 * @property string $displayPhoneNumberName
 * @property string $displayPhoneNumber
 * @property string $qualityRating
 * @property string|null $dataLocalizationRegion
 */
class WhatsAppPhoneNumberDetail extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     phoneNumber: string,
     *     phoneNumberId: string,
     *     metaPhoneNumberId: string,
     *     displayPhoneNumberName: string,
     *     displayPhoneNumber: string,
     *     qualityRating: string,
     *     dataLocalizationRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
