<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaConfiguration $SchemaConfiguration
 * @property InputFormatConfiguration $InputFormatConfiguration
 * @property OutputFormatConfiguration $OutputFormatConfiguration
 * @property bool $Enabled
 */
class DataFormatConversionConfiguration extends Shape
{
    /**
     * @param array{
     *     SchemaConfiguration?: SchemaConfiguration,
     *     InputFormatConfiguration?: InputFormatConfiguration,
     *     OutputFormatConfiguration?: OutputFormatConfiguration,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
