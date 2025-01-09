<?php

namespace Sunaoka\Aws\Structures\DataZone\GetMetadataGenerationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $revision
 * @property 'ASSET' $type
 */
class MetadataGenerationRunTarget extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     revision?: string,
     *     type: 'ASSET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
