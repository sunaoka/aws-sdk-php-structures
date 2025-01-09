<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseARN
 */
class GlueDataCatalogConfiguration extends Shape
{
    /**
     * @param array{DatabaseARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
