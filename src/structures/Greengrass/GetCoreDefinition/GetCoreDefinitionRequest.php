<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetCoreDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreDefinitionId
 */
class GetCoreDefinitionRequest extends Request
{
    /**
     * @param array{CoreDefinitionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
