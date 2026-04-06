<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $revision
 * @property string|null $displayName
 */
class UpdateRelationshipDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     revision?: string|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
