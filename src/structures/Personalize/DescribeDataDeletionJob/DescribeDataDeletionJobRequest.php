<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataDeletionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataDeletionJobArn
 */
class DescribeDataDeletionJobRequest extends Request
{
    /**
     * @param array{dataDeletionJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
