<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanRelatedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property array<string, string> $ResourceIdentifier
 */
class ScannedResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     ResourceType: string,
     *     ResourceIdentifier: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
