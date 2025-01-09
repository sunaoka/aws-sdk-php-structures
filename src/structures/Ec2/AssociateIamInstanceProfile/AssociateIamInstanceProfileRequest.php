<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIamInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IamInstanceProfileSpecification $IamInstanceProfile
 * @property string $InstanceId
 */
class AssociateIamInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     IamInstanceProfile: Shapes\IamInstanceProfileSpecification,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
