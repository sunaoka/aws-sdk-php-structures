<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeRepositoryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationArn
 */
class DescribeRepositoryAssociationRequest extends Request
{
    /**
     * @param array{AssociationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
