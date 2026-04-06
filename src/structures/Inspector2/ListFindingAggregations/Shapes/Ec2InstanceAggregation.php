<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $amis
 * @property list<StringFilter>|null $operatingSystems
 * @property list<StringFilter>|null $instanceIds
 * @property list<MapFilter>|null $instanceTags
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'NETWORK_FINDINGS'|'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 */
class Ec2InstanceAggregation extends Shape
{
    /**
     * @param array{
     *     amis?: list<StringFilter>|null,
     *     operatingSystems?: list<StringFilter>|null,
     *     instanceIds?: list<StringFilter>|null,
     *     instanceTags?: list<MapFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'NETWORK_FINDINGS'|'CRITICAL'|'HIGH'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
