<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalKinesisStreamsForLedger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property bool $AggregationEnabled
 */
class KinesisConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamArn: string,
     *     AggregationEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
