<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueDataCatalogConfigurationUpdate $GlueDataCatalogConfigurationUpdate
 */
class CatalogConfigurationUpdate extends Shape
{
    /**
     * @param array{GlueDataCatalogConfigurationUpdate: GlueDataCatalogConfigurationUpdate} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
