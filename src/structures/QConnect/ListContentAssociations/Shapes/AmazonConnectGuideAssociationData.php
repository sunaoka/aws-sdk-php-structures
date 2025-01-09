<?php

namespace Sunaoka\Aws\Structures\QConnect\ListContentAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $flowId
 */
class AmazonConnectGuideAssociationData extends Shape
{
    /**
     * @param array{flowId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
