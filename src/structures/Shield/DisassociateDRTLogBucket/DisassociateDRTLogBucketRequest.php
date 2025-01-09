<?php

namespace Sunaoka\Aws\Structures\Shield\DisassociateDRTLogBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LogBucket
 */
class DisassociateDRTLogBucketRequest extends Request
{
    /**
     * @param array{LogBucket: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
