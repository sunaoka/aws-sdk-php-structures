<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'JSON'|'PARQUET'|null $fileType
 * @property PrefixConfig $prefixConfig
 * @property AggregationConfig|null $aggregationConfig
 */
class UpsolverS3OutputFormatConfig extends Shape
{
    /**
     * @param array{
     *     fileType?: 'CSV'|'JSON'|'PARQUET'|null,
     *     prefixConfig: PrefixConfig,
     *     aggregationConfig?: AggregationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
