<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateCoreDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreDefinitionId
 * @property string|null $Name
 */
class UpdateCoreDefinitionRequest extends Request
{
    /**
     * @param array{
     *     CoreDefinitionId: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
