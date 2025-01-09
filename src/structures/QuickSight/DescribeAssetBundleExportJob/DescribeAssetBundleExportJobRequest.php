<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssetBundleExportJobId
 */
class DescribeAssetBundleExportJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssetBundleExportJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
