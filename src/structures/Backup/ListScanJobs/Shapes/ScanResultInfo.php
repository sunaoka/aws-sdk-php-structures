<?php

namespace Sunaoka\Aws\Structures\Backup\ListScanJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_THREATS_FOUND'|'THREATS_FOUND' $ScanResultStatus
 */
class ScanResultInfo extends Shape
{
    /**
     * @param array{ScanResultStatus: 'NO_THREATS_FOUND'|'THREATS_FOUND'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
