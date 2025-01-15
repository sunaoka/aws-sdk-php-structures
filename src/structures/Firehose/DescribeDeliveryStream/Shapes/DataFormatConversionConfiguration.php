<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaConfiguration|null $SchemaConfiguration
 * @property InputFormatConfiguration|null $InputFormatConfiguration
 * @property OutputFormatConfiguration|null $OutputFormatConfiguration
 * @property bool|null $Enabled
 */
class DataFormatConversionConfiguration extends Shape
{
    /**
     * @param array{
     *     SchemaConfiguration?: SchemaConfiguration|null,
     *     InputFormatConfiguration?: InputFormatConfiguration|null,
     *     OutputFormatConfiguration?: OutputFormatConfiguration|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
