<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceDefinitionId
 */
class GetResourceDefinitionRequest extends Request
{
    /**
     * @param array{ResourceDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
