<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class MetadataFormReference extends Shape
{
    /**
     * @param array{
     *     typeIdentifier: string,
     *     typeRevision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
