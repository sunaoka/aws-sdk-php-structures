<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetOnPremisesInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceName
 * @property string $iamSessionArn
 * @property string $iamUserArn
 * @property string $instanceArn
 * @property \Aws\Api\DateTimeResult $registerTime
 * @property \Aws\Api\DateTimeResult $deregisterTime
 * @property list<Tag> $tags
 */
class InstanceInfo extends Shape
{
    /**
     * @param array{
     *     instanceName?: string,
     *     iamSessionArn?: string,
     *     iamUserArn?: string,
     *     instanceArn?: string,
     *     registerTime?: \Aws\Api\DateTimeResult,
     *     deregisterTime?: \Aws\Api\DateTimeResult,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
