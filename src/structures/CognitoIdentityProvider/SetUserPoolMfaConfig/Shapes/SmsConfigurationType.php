<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnsCallerArn
 * @property string|null $ExternalId
 * @property string|null $SnsRegion
 * @property EumsSmsConfigurationType|null $EumsSms
 */
class SmsConfigurationType extends Shape
{
    /**
     * @param array{
     *     SnsCallerArn?: string|null,
     *     ExternalId?: string|null,
     *     SnsRegion?: string|null,
     *     EumsSms?: EumsSmsConfigurationType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
