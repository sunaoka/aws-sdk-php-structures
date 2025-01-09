<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribePackageImportJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
