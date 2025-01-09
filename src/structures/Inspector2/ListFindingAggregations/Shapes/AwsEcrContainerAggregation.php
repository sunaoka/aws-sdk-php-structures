<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $architectures
 * @property list<StringFilter> $imageShas
 * @property list<StringFilter> $imageTags
 * @property list<StringFilter> $repositories
 * @property list<StringFilter> $resourceIds
 * @property 'CRITICAL'|'HIGH'|'ALL' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class AwsEcrContainerAggregation extends Shape
{
    /**
     * @param array{
     *     architectures?: list<StringFilter>,
     *     imageShas?: list<StringFilter>,
     *     imageTags?: list<StringFilter>,
     *     repositories?: list<StringFilter>,
     *     resourceIds?: list<StringFilter>,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
