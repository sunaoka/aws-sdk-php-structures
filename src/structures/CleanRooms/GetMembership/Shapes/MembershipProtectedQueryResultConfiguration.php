<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipProtectedQueryOutputConfiguration $outputConfiguration
 * @property string $roleArn
 */
class MembershipProtectedQueryResultConfiguration extends Shape
{
    /**
     * @param array{
     *     outputConfiguration: MembershipProtectedQueryOutputConfiguration,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
