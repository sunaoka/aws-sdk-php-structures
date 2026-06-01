<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecondaryRegion
 * @property string $PrimaryRoute53HealthCheckId
 */
class FailoverType extends Shape
{
    /**
     * @param array{
     *     SecondaryRegion: string,
     *     PrimaryRoute53HealthCheckId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
