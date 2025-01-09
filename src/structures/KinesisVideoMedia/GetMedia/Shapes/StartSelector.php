<?php

namespace Sunaoka\Aws\Structures\KinesisVideoMedia\GetMedia\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FRAGMENT_NUMBER'|'SERVER_TIMESTAMP'|'PRODUCER_TIMESTAMP'|'NOW'|'EARLIEST'|'CONTINUATION_TOKEN' $StartSelectorType
 * @property string $AfterFragmentNumber
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property string $ContinuationToken
 */
class StartSelector extends Shape
{
    /**
     * @param array{
     *     StartSelectorType: 'FRAGMENT_NUMBER'|'SERVER_TIMESTAMP'|'PRODUCER_TIMESTAMP'|'NOW'|'EARLIEST'|'CONTINUATION_TOKEN',
     *     AfterFragmentNumber?: string,
     *     StartTimestamp?: \Aws\Api\DateTimeResult,
     *     ContinuationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
