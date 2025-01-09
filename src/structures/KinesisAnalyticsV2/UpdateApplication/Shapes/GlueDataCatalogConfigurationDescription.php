<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseARN
 */
class GlueDataCatalogConfigurationDescription extends Shape
{
    /**
     * @param array{DatabaseARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
