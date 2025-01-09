<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnsCallerArn
 * @property string $ExternalId
 * @property string $SnsRegion
 */
class SmsConfigurationType extends Shape
{
    /**
     * @param array{
     *     SnsCallerArn: string,
     *     ExternalId?: string,
     *     SnsRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
