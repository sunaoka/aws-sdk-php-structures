<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'Creating'|'Attaching'|'Attached'|'Error' $state
 * @property string|null $errorCode
 * @property string|null $errorDetails
 */
class LightsailDistributionSubdomain extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     state: 'Creating'|'Attaching'|'Attached'|'Error',
     *     errorCode?: string|null,
     *     errorDetails?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
