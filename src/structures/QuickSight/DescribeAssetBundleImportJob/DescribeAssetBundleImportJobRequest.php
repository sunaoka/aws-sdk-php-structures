<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssetBundleImportJobId
 */
class DescribeAssetBundleImportJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssetBundleImportJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
