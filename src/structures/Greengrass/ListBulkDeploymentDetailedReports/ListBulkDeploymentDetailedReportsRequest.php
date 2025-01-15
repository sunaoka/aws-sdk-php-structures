<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeploymentDetailedReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BulkDeploymentId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListBulkDeploymentDetailedReportsRequest extends Request
{
    /**
     * @param array{
     *     BulkDeploymentId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
