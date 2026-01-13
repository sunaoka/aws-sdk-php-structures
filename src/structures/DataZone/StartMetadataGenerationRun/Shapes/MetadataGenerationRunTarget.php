<?php

namespace Sunaoka\Aws\Structures\DataZone\StartMetadataGenerationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASSET' $type
 * @property string $identifier
 * @property string|null $revision
 */
class MetadataGenerationRunTarget extends Shape
{
    /**
     * @param array{
     *     type: 'ASSET',
     *     identifier: string,
     *     revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
