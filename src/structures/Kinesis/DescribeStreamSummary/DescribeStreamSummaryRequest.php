<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 */
class DescribeStreamSummaryRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
