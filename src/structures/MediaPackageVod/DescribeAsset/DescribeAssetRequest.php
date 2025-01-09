<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribeAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeAssetRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
