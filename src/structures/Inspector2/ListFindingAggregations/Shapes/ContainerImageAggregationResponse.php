<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceId
 * @property 'AWS'|'AZURE'|null $cloudProvider
 * @property string|null $cloudAccountId
 * @property string|null $cloudPartition
 * @property string|null $cloudRegion
 * @property string|null $cloudOrgId
 * @property string|null $imageDigest
 * @property string|null $repository
 * @property string|null $registry
 * @property string|null $architecture
 * @property list<string>|null $imageTags
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property \Aws\Api\DateTimeResult|null $lastInUseAt
 * @property int|null $inUseCount
 * @property int|null $exploitAvailableActiveFindingsCount
 * @property int|null $fixAvailableActiveFindingsCount
 */
class ContainerImageAggregationResponse extends Shape
{
    /**
     * @param array{
     *     resourceId: string,
     *     cloudProvider?: 'AWS'|'AZURE'|null,
     *     cloudAccountId?: string|null,
     *     cloudPartition?: string|null,
     *     cloudRegion?: string|null,
     *     cloudOrgId?: string|null,
     *     imageDigest?: string|null,
     *     repository?: string|null,
     *     registry?: string|null,
     *     architecture?: string|null,
     *     imageTags?: list<string>|null,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     lastInUseAt?: \Aws\Api\DateTimeResult|null,
     *     inUseCount?: int|null,
     *     exploitAvailableActiveFindingsCount?: int|null,
     *     fixAvailableActiveFindingsCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
