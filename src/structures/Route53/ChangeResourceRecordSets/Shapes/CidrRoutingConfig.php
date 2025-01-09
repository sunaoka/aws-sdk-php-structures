<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CollectionId
 * @property string $LocationName
 */
class CidrRoutingConfig extends Shape
{
    /**
     * @param array{
     *     CollectionId: string,
     *     LocationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
