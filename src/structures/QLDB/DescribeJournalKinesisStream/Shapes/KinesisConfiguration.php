<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeJournalKinesisStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property bool|null $AggregationEnabled
 */
class KinesisConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamArn: string,
     *     AggregationEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
