<?php

namespace Sunaoka\Aws\Structures\WorkMail\TestAvailabilityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EwsEndpoint
 * @property string $EwsUsername
 * @property string $EwsPassword
 */
class EwsAvailabilityProvider extends Shape
{
    /**
     * @param array{
     *     EwsEndpoint: string,
     *     EwsUsername: string,
     *     EwsPassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
