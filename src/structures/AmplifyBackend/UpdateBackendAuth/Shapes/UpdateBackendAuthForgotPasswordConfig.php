<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'SMS'|null $DeliveryMethod
 * @property EmailSettings|null $EmailSettings
 * @property SmsSettings|null $SmsSettings
 */
class UpdateBackendAuthForgotPasswordConfig extends Shape
{
    /**
     * @param array{
     *     DeliveryMethod?: 'EMAIL'|'SMS'|null,
     *     EmailSettings?: EmailSettings|null,
     *     SmsSettings?: SmsSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
