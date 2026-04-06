<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $architecture
 * @property string|null $imageSha
 * @property list<string>|null $imageTags
 * @property string|null $repository
 * @property string $resourceId
 * @property SeverityCounts|null $severityCounts
 */
class AwsEcrContainerAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     architecture?: string|null,
     *     imageSha?: string|null,
     *     imageTags?: list<string>|null,
     *     repository?: string|null,
     *     resourceId: string,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
