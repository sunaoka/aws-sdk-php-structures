<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property list<Processor>|null $Processors
 */
class ProcessingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     Processors?: list<Processor>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
