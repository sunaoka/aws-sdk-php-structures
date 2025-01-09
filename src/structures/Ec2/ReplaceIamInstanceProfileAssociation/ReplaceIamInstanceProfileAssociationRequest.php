<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceIamInstanceProfileAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IamInstanceProfileSpecification $IamInstanceProfile
 * @property string $AssociationId
 */
class ReplaceIamInstanceProfileAssociationRequest extends Request
{
    /**
     * @param array{
     *     IamInstanceProfile: Shapes\IamInstanceProfileSpecification,
     *     AssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
