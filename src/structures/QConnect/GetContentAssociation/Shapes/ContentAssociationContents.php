<?php

namespace Sunaoka\Aws\Structures\QConnect\GetContentAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonConnectGuideAssociationData|null $amazonConnectGuideAssociation
 */
class ContentAssociationContents extends Shape
{
    /**
     * @param array{amazonConnectGuideAssociation?: AmazonConnectGuideAssociationData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
