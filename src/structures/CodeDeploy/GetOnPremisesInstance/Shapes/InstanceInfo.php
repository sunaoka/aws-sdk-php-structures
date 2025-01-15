<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetOnPremisesInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceName
 * @property string|null $iamSessionArn
 * @property string|null $iamUserArn
 * @property string|null $instanceArn
 * @property \Aws\Api\DateTimeResult|null $registerTime
 * @property \Aws\Api\DateTimeResult|null $deregisterTime
 * @property list<Tag>|null $tags
 */
class InstanceInfo extends Shape
{
    /**
     * @param array{
     *     instanceName?: string|null,
     *     iamSessionArn?: string|null,
     *     iamUserArn?: string|null,
     *     instanceArn?: string|null,
     *     registerTime?: \Aws\Api\DateTimeResult|null,
     *     deregisterTime?: \Aws\Api\DateTimeResult|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
