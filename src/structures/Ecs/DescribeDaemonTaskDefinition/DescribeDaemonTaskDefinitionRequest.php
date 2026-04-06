<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $daemonTaskDefinition
 */
class DescribeDaemonTaskDefinitionRequest extends Request
{
    /**
     * @param array{daemonTaskDefinition: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
