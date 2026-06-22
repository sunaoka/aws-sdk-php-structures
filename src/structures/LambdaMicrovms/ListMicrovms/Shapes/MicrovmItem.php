<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $microvmId
 * @property 'PENDING'|'RUNNING'|'SUSPENDING'|'SUSPENDED'|'TERMINATING'|'TERMINATED' $state
 * @property string $imageArn
 * @property string $imageVersion
 * @property \Aws\Api\DateTimeResult $startedAt
 */
class MicrovmItem extends Shape
{
    /**
     * @param array{
     *     microvmId: string,
     *     state: 'PENDING'|'RUNNING'|'SUSPENDING'|'SUSPENDED'|'TERMINATING'|'TERMINATED',
     *     imageArn: string,
     *     imageVersion: string,
     *     startedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
