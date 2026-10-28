<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $amis
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_INSTANCES'|null $sortBy
 * @property list<'INSTANCE_SCAN'|'MACHINE_IMAGE_SCAN'>|null $scanSources
 */
class AmiAggregation extends Shape
{
    /**
     * @param array{
     *     amis?: list<StringFilter>|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|'AFFECTED_INSTANCES'|null,
     *     scanSources?: list<'INSTANCE_SCAN'|'MACHINE_IMAGE_SCAN'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
