<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeploymentDetailedReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BulkDeploymentId
 * @property string $MaxResults
 * @property string $NextToken
 */
class ListBulkDeploymentDetailedReportsRequest extends Request
{
    /**
     * @param array{
     *     BulkDeploymentId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
