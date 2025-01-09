<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseARNUpdate
 */
class GlueDataCatalogConfigurationUpdate extends Shape
{
    /**
     * @param array{DatabaseARNUpdate: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
