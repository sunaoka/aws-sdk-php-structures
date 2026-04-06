<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteQuotaShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $quotaShareArn
 */
class DeleteQuotaShareRequest extends Request
{
    /**
     * @param array{quotaShareArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
