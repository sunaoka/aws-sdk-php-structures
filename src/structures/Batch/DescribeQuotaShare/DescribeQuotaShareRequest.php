<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeQuotaShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $quotaShareArn
 */
class DescribeQuotaShareRequest extends Request
{
    /**
     * @param array{quotaShareArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
