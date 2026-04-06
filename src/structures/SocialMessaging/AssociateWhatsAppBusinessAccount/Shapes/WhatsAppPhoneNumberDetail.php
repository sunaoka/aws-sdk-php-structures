<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $phoneNumber
 * @property string $phoneNumberId
 * @property string $metaPhoneNumberId
 * @property string $displayPhoneNumberName
 * @property string $displayPhoneNumber
 * @property string $qualityRating
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
     *     qualityRating: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
