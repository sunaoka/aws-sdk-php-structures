<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserProfileArn
 * @property string|null $UserProfileName
 * @property string|null $DomainId
 * @property IamIdentity|null $IamIdentity
 */
class UserContext extends Shape
{
    /**
     * @param array{
     *     UserProfileArn?: string|null,
     *     UserProfileName?: string|null,
     *     DomainId?: string|null,
     *     IamIdentity?: IamIdentity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
