<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $twoFactorPin
 * @property string|null $dataLocalizationRegion
 * @property list<Tag>|null $tags
 */
class WabaPhoneNumberSetupFinalization extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     twoFactorPin: string,
     *     dataLocalizationRegion?: string|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
