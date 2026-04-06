<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 */
class CreateRelationshipDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
