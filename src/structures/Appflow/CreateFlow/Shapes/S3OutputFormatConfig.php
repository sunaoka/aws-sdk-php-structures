<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'JSON'|'PARQUET' $fileType
 * @property PrefixConfig $prefixConfig
 * @property AggregationConfig $aggregationConfig
 * @property bool $preserveSourceDataTyping
 */
class S3OutputFormatConfig extends Shape
{
    /**
     * @param array{
     *     fileType?: 'CSV'|'JSON'|'PARQUET',
     *     prefixConfig?: PrefixConfig,
     *     aggregationConfig?: AggregationConfig,
     *     preserveSourceDataTyping?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
