<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueDataCatalogConfigurationDescription $GlueDataCatalogConfigurationDescription
 */
class CatalogConfigurationDescription extends Shape
{
    /**
     * @param array{GlueDataCatalogConfigurationDescription: GlueDataCatalogConfigurationDescription} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
