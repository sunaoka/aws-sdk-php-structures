<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnsCallerArn
 * @property string|null $ExternalId
 * @property string|null $SnsRegion
 */
class SmsConfigurationType extends Shape
{
    /**
     * @param array{
     *     SnsCallerArn: string,
     *     ExternalId?: string|null,
     *     SnsRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
