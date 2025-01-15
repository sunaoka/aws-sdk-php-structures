<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Trail> $trails
 * @property string $accessRole
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class CloudTrailDetails extends Shape
{
    /**
     * @param array{
     *     trails: list<Trail>,
     *     accessRole: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
