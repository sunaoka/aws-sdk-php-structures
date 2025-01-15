<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetailsWithEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityInfo $EntityInfo
 * @property \Aws\Api\DateTimeResult|null $LastAuthenticated
 */
class EntityDetails extends Shape
{
    /**
     * @param array{
     *     EntityInfo: EntityInfo,
     *     LastAuthenticated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
