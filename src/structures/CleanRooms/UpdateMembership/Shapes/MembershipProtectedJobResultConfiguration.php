<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipProtectedJobOutputConfiguration $outputConfiguration
 * @property string $roleArn
 */
class MembershipProtectedJobResultConfiguration extends Shape
{
    /**
     * @param array{
     *     outputConfiguration: MembershipProtectedJobOutputConfiguration,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
