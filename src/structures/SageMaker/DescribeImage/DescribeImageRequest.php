<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 */
class DescribeImageRequest extends Request
{
    /**
     * @param array{ImageName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
