<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetRLSPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string|null $Name
 * @property list<Column>|null $AttachmentColumns
 * @property string|null $FilterExpression
 * @property 'VALID'|'INVALID'|null $Status
 * @property 'REFERENCED_UDF_DELETED'|'REFERENCED_LOOKUP_TABLE_DELETED'|null $StatusReason
 */
class RLSPolicy extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Name?: string|null,
     *     AttachmentColumns?: list<Column>|null,
     *     FilterExpression?: string|null,
     *     Status?: 'VALID'|'INVALID'|null,
     *     StatusReason?: 'REFERENCED_UDF_DELETED'|'REFERENCED_LOOKUP_TABLE_DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
