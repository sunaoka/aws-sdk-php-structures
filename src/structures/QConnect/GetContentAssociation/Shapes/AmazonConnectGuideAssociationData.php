<?php

namespace Sunaoka\Aws\Structures\QConnect\GetContentAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $flowId
 */
class AmazonConnectGuideAssociationData extends Shape
{
    /**
     * @param array{flowId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
