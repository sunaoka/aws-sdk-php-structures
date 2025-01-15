<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAvailabilityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EwsEndpoint
 * @property string|null $EwsUsername
 */
class RedactedEwsAvailabilityProvider extends Shape
{
    /**
     * @param array{
     *     EwsEndpoint?: string|null,
     *     EwsUsername?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
