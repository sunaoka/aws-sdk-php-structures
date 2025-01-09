<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\InitiateAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnalyticsEndpointId
 */
class AnalyticsMetadataType extends Shape
{
    /**
     * @param array{AnalyticsEndpointId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
