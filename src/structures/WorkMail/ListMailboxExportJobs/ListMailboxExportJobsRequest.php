<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailboxExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListMailboxExportJobsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
