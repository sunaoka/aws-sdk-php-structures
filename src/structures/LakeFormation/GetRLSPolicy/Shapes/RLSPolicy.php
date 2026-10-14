<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetRLSPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string|null $Name
 * @property list<Column>|null $AttachmentColumns
 * @property string|null $FilterExpression
 */
class RLSPolicy extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Name?: string|null,
     *     AttachmentColumns?: list<Column>|null,
     *     FilterExpression?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
