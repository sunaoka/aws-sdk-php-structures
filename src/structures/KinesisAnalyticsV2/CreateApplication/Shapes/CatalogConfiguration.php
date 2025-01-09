<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueDataCatalogConfiguration $GlueDataCatalogConfiguration
 */
class CatalogConfiguration extends Shape
{
    /**
     * @param array{GlueDataCatalogConfiguration: GlueDataCatalogConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
