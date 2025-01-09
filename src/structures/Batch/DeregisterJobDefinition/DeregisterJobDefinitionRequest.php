<?php

namespace Sunaoka\Aws\Structures\Batch\DeregisterJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobDefinition
 */
class DeregisterJobDefinitionRequest extends Request
{
    /**
     * @param array{jobDefinition: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
