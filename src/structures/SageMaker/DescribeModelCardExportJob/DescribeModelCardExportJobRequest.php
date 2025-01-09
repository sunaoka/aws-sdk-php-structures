<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCardExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardExportJobArn
 */
class DescribeModelCardExportJobRequest extends Request
{
    /**
     * @param array{ModelCardExportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
