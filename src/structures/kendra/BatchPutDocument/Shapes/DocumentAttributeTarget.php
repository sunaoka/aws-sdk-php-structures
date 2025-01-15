<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetDocumentAttributeKey
 * @property bool|null $TargetDocumentAttributeValueDeletion
 * @property DocumentAttributeValue|null $TargetDocumentAttributeValue
 */
class DocumentAttributeTarget extends Shape
{
    /**
     * @param array{
     *     TargetDocumentAttributeKey?: string|null,
     *     TargetDocumentAttributeValueDeletion?: bool|null,
     *     TargetDocumentAttributeValue?: DocumentAttributeValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
