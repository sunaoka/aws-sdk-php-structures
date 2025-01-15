<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateResourceDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string $ResourceDefinitionId
 */
class UpdateResourceDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ResourceDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
