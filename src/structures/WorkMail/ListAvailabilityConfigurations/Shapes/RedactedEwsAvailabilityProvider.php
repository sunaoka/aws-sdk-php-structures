<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAvailabilityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EwsEndpoint
 * @property string $EwsUsername
 */
class RedactedEwsAvailabilityProvider extends Shape
{
    /**
     * @param array{
     *     EwsEndpoint?: string,
     *     EwsUsername?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
