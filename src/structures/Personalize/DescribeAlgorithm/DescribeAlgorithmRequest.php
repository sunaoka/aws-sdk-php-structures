<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $algorithmArn
 */
class DescribeAlgorithmRequest extends Request
{
    /**
     * @param array{algorithmArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
