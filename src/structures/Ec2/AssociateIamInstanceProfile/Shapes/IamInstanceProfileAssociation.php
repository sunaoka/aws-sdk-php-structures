<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIamInstanceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $InstanceId
 * @property IamInstanceProfile|null $IamInstanceProfile
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|null $State
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class IamInstanceProfileAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     InstanceId?: string|null,
     *     IamInstanceProfile?: IamInstanceProfile|null,
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
