<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EntityRecognizerArn
 */
class DescribeEntityRecognizerRequest extends Request
{
    /**
     * @param array{EntityRecognizerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
