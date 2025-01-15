<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListPolicyGenerations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $principalArn
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'CANCELED' $status
 * @property \Aws\Api\DateTimeResult $startedOn
 * @property \Aws\Api\DateTimeResult|null $completedOn
 */
class PolicyGeneration extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     principalArn: string,
     *     status: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'CANCELED',
     *     startedOn: \Aws\Api\DateTimeResult,
     *     completedOn?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
