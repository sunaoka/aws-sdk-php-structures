<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<string> $regions
 * @property string $accessRoleArn
 */
class AggregationConfiguration extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     regions: list<string>,
     *     accessRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
