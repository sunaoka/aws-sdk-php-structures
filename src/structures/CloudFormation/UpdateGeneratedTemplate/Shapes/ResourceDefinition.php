<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string|null $LogicalResourceId
 * @property array<string, string> $ResourceIdentifier
 */
class ResourceDefinition extends Shape
{
    /**
     * @param array{
     *     ResourceType: string,
     *     LogicalResourceId?: string|null,
     *     ResourceIdentifier: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
