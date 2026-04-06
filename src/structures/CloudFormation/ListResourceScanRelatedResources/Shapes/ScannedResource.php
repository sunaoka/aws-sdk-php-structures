<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanRelatedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property array<string, string>|null $ResourceIdentifier
 * @property bool|null $ManagedByStack
 */
class ScannedResource extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ResourceIdentifier?: array<string, string>|null,
     *     ManagedByStack?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
