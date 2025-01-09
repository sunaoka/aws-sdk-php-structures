<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetDocumentAttributeKey
 * @property bool $TargetDocumentAttributeValueDeletion
 * @property DocumentAttributeValue $TargetDocumentAttributeValue
 */
class DocumentAttributeTarget extends Shape
{
    /**
     * @param array{
     *     TargetDocumentAttributeKey?: string,
     *     TargetDocumentAttributeValueDeletion?: bool,
     *     TargetDocumentAttributeValue?: DocumentAttributeValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
