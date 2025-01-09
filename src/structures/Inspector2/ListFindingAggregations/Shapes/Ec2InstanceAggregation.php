<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $amis
 * @property list<StringFilter> $instanceIds
 * @property list<MapFilter> $instanceTags
 * @property list<StringFilter> $operatingSystems
 * @property 'NETWORK_FINDINGS'|'CRITICAL'|'HIGH'|'ALL' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class Ec2InstanceAggregation extends Shape
{
    /**
     * @param array{
     *     amis?: list<StringFilter>,
     *     instanceIds?: list<StringFilter>,
     *     instanceTags?: list<MapFilter>,
     *     operatingSystems?: list<StringFilter>,
     *     sortBy?: 'NETWORK_FINDINGS'|'CRITICAL'|'HIGH'|'ALL',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
