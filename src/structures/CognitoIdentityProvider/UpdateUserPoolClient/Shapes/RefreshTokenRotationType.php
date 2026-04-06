<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Feature
 * @property int<0, 60>|null $RetryGracePeriodSeconds
 */
class RefreshTokenRotationType extends Shape
{
    /**
     * @param array{
     *     Feature: 'ENABLED'|'DISABLED',
     *     RetryGracePeriodSeconds?: int<0, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
