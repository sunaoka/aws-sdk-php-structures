<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EngagementIdentifier
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\SortObject $Sort
 * @property 'Running'|'Stopped' $Status
 */
class ListResourceSnapshotJobsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Sort?: Shapes\SortObject,
     *     Status?: 'Running'|'Stopped'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
