<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateServiceEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceEnvironment
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property list<Shapes\CapacityLimit>|null $capacityLimits
 */
class UpdateServiceEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     serviceEnvironment: string,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     capacityLimits?: list<Shapes\CapacityLimit>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
