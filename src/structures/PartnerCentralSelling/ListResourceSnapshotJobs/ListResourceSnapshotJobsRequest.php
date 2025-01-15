<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $EngagementIdentifier
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\SortObject|null $Sort
 * @property 'Running'|'Stopped'|null $Status
 */
class ListResourceSnapshotJobsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\SortObject|null,
     *     Status?: 'Running'|'Stopped'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
