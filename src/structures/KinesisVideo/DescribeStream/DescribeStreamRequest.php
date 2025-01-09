<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 */
class DescribeStreamRequest extends Request
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
