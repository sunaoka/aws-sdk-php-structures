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
 * @property string|null $vmImageReference
 * @property string|null $operatingSystem
 * @property array<string, string>|null $tags
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property int|null $networkFindings
 * @property int|null $exploitAvailableActiveFindingsCount
 * @property int|null $fixAvailableActiveFindingsCount
 */
class VmInstanceAggregationResponse extends Shape
{
    /**
     * @param array{
     *     resourceId: string,
     *     cloudProvider?: 'AWS'|'AZURE'|null,
     *     cloudAccountId?: string|null,
     *     cloudPartition?: string|null,
     *     cloudRegion?: string|null,
     *     cloudOrgId?: string|null,
     *     vmImageReference?: string|null,
     *     operatingSystem?: string|null,
     *     tags?: array<string, string>|null,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     networkFindings?: int|null,
     *     exploitAvailableActiveFindingsCount?: int|null,
     *     fixAvailableActiveFindingsCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
