<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'JSON'|'PARQUET'|null $fileType
 * @property PrefixConfig|null $prefixConfig
 * @property AggregationConfig|null $aggregationConfig
 * @property bool|null $preserveSourceDataTyping
 */
class S3OutputFormatConfig extends Shape
{
    /**
     * @param array{
     *     fileType?: 'CSV'|'JSON'|'PARQUET'|null,
     *     prefixConfig?: PrefixConfig|null,
     *     aggregationConfig?: AggregationConfig|null,
     *     preserveSourceDataTyping?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
