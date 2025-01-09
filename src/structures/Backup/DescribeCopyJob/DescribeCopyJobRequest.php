<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeCopyJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CopyJobId
 */
class DescribeCopyJobRequest extends Request
{
    /**
     * @param array{CopyJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
