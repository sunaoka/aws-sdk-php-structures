<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceAdmin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity|null $Admin
 * @property string|null $AppInstanceArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class AppInstanceAdmin extends Shape
{
    /**
     * @param array{
     *     Admin?: Identity|null,
     *     AppInstanceArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
