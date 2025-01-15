<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAssetBundleExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListAssetBundleExportJobsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
