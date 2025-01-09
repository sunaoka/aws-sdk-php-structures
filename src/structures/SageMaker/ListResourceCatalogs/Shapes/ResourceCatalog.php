<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListResourceCatalogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceCatalogArn
 * @property string $ResourceCatalogName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class ResourceCatalog extends Shape
{
    /**
     * @param array{
     *     ResourceCatalogArn: string,
     *     ResourceCatalogName: string,
     *     Description: string,
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
