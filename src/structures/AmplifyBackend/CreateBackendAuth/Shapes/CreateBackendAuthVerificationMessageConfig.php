<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'SMS' $DeliveryMethod
 * @property EmailSettings $EmailSettings
 * @property SmsSettings $SmsSettings
 */
class CreateBackendAuthVerificationMessageConfig extends Shape
{
    /**
     * @param array{
     *     DeliveryMethod: 'EMAIL'|'SMS',
     *     EmailSettings?: EmailSettings,
     *     SmsSettings?: SmsSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
