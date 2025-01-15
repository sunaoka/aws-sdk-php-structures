<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'SMS' $DeliveryMethod
 * @property EmailSettings|null $EmailSettings
 * @property SmsSettings|null $SmsSettings
 */
class CreateBackendAuthForgotPasswordConfig extends Shape
{
    /**
     * @param array{
     *     DeliveryMethod: 'EMAIL'|'SMS',
     *     EmailSettings?: EmailSettings|null,
     *     SmsSettings?: SmsSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
