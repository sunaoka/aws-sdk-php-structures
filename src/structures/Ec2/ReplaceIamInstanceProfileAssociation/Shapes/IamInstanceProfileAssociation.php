<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceIamInstanceProfileAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $InstanceId
 * @property IamInstanceProfile $IamInstanceProfile
 * @property 'associating'|'associated'|'disassociating'|'disassociated' $State
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class IamInstanceProfileAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     InstanceId?: string,
     *     IamInstanceProfile?: IamInstanceProfile,
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated',
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
