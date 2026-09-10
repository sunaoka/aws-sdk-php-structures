<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSourceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $sourceArn
 * @property 'ALARM' $eventType
 * @property TestRunSourceEventDetail $detail
 */
class TestRunSourceEvent extends Shape
{
    /**
     * @param array{
     *     timestamp: \Aws\Api\DateTimeResult,
     *     sourceArn: string,
     *     eventType: 'ALARM',
     *     detail: TestRunSourceEventDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
