<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetailsWithEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityInfo $EntityInfo
 * @property \Aws\Api\DateTimeResult $LastAuthenticated
 */
class EntityDetails extends Shape
{
    /**
     * @param array{
     *     EntityInfo: EntityInfo,
     *     LastAuthenticated?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
