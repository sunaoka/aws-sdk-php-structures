<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 */
class DescribeStreamSummaryRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
