<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrialComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserProfileArn
 * @property string $UserProfileName
 * @property string $DomainId
 * @property IamIdentity $IamIdentity
 */
class UserContext extends Shape
{
    /**
     * @param array{
     *     UserProfileArn?: string,
     *     UserProfileName?: string,
     *     DomainId?: string,
     *     IamIdentity?: IamIdentity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
