<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeResourceScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceScanId
 */
class DescribeResourceScanRequest extends Request
{
    /**
     * @param array{ResourceScanId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
