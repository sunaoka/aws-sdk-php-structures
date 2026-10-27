<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Value
 * @property 'AVAILABLE'|'DELETED'|'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED'|'DRAFTING'|null $Status
 * @property string|null $Arn
 */
class AttachmentReference extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: string|null,
     *     Status?: 'AVAILABLE'|'DELETED'|'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED'|'DRAFTING'|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
