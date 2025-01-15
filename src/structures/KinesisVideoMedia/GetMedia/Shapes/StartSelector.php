<?php

namespace Sunaoka\Aws\Structures\KinesisVideoMedia\GetMedia\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FRAGMENT_NUMBER'|'SERVER_TIMESTAMP'|'PRODUCER_TIMESTAMP'|'NOW'|'EARLIEST'|'CONTINUATION_TOKEN' $StartSelectorType
 * @property string|null $AfterFragmentNumber
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property string|null $ContinuationToken
 */
class StartSelector extends Shape
{
    /**
     * @param array{
     *     StartSelectorType: 'FRAGMENT_NUMBER'|'SERVER_TIMESTAMP'|'PRODUCER_TIMESTAMP'|'NOW'|'EARLIEST'|'CONTINUATION_TOKEN',
     *     AfterFragmentNumber?: string|null,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ContinuationToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
