<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectNames
 * @property string|null $providerType
 * @property SeverityCounts|null $severityCounts
 * @property int|null $exploitAvailableActiveFindingsCount
 * @property int|null $fixAvailableActiveFindingsCount
 * @property string|null $accountId
 * @property string|null $resourceId
 */
class CodeRepositoryAggregationResponse extends Shape
{
    /**
     * @param array{
     *     projectNames: string,
     *     providerType?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     exploitAvailableActiveFindingsCount?: int|null,
     *     fixAvailableActiveFindingsCount?: int|null,
     *     accountId?: string|null,
     *     resourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
