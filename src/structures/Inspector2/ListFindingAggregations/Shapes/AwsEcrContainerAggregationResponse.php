<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceId
 * @property string|null $imageSha
 * @property string|null $repository
 * @property string|null $architecture
 * @property list<string>|null $imageTags
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property \Aws\Api\DateTimeResult|null $lastInUseAt
 * @property int|null $inUseCount
 */
class AwsEcrContainerAggregationResponse extends Shape
{
    /**
     * @param array{
     *     resourceId: string,
     *     imageSha?: string|null,
     *     repository?: string|null,
     *     architecture?: string|null,
     *     imageTags?: list<string>|null,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     lastInUseAt?: \Aws\Api\DateTimeResult|null,
     *     inUseCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
