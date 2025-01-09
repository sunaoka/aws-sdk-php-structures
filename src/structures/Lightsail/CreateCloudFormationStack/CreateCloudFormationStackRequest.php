<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCloudFormationStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InstanceEntry> $instances
 */
class CreateCloudFormationStackRequest extends Request
{
    /**
     * @param array{instances: list<Shapes\InstanceEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
