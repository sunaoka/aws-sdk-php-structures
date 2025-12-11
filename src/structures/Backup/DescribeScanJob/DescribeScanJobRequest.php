<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeScanJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScanJobId
 */
class DescribeScanJobRequest extends Request
{
    /**
     * @param array{ScanJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
