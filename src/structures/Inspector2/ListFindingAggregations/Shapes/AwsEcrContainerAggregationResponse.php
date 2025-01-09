<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $architecture
 * @property string $imageSha
 * @property list<string> $imageTags
 * @property string $repository
 * @property string $resourceId
 * @property SeverityCounts $severityCounts
 */
class AwsEcrContainerAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     architecture?: string,
     *     imageSha?: string,
     *     imageTags?: list<string>,
     *     repository?: string,
     *     resourceId: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
