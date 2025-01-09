<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageId
 */
class DescribePackageRequest extends Request
{
    /**
     * @param array{PackageId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
