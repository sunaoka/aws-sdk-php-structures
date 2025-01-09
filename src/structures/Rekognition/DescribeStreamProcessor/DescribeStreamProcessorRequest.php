<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeStreamProcessorRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
