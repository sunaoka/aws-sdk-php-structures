<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $twoFactorPin
 * @property string $dataLocalizationRegion
 * @property list<Tag> $tags
 */
class WabaPhoneNumberSetupFinalization extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     twoFactorPin: string,
     *     dataLocalizationRegion?: string,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
