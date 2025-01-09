<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string $LogicalResourceId
 * @property array<string, string> $ResourceIdentifier
 */
class ResourceDefinition extends Shape
{
    /**
     * @param array{
     *     ResourceType: string,
     *     LogicalResourceId?: string,
     *     ResourceIdentifier: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
