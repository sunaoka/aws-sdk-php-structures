<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipProtectedQueryOutputConfiguration $outputConfiguration
 * @property string|null $roleArn
 */
class MembershipProtectedQueryResultConfiguration extends Shape
{
    /**
     * @param array{
     *     outputConfiguration: MembershipProtectedQueryOutputConfiguration,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
