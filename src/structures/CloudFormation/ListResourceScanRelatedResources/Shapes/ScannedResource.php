<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanRelatedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property array<string, string> $ResourceIdentifier
 * @property bool $ManagedByStack
 */
class ScannedResource extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     ResourceIdentifier?: array<string, string>,
     *     ManagedByStack?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
