<?php

namespace Sunaoka\Aws\Structures\DataZone\ListMetadataGenerationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string|null $revision
 * @property 'ASSET' $type
 */
class MetadataGenerationRunTarget extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     revision?: string|null,
     *     type: 'ASSET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
