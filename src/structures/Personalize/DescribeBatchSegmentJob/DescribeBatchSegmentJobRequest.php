<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchSegmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchSegmentJobArn
 */
class DescribeBatchSegmentJobRequest extends Request
{
    /**
     * @param array{batchSegmentJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
