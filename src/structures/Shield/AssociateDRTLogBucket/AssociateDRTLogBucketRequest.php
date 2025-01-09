<?php

namespace Sunaoka\Aws\Structures\Shield\AssociateDRTLogBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LogBucket
 */
class AssociateDRTLogBucketRequest extends Request
{
    /**
     * @param array{LogBucket: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
