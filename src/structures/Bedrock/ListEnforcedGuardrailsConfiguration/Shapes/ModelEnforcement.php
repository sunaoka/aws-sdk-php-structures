<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEnforcedGuardrailsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $includedModels
 * @property list<string> $excludedModels
 */
class ModelEnforcement extends Shape
{
    /**
     * @param array{
     *     includedModels: list<string>,
     *     excludedModels: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
