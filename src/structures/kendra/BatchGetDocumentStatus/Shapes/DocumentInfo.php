<?php

namespace Sunaoka\Aws\Structures\kendra\BatchGetDocumentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentId
 * @property list<DocumentAttribute> $Attributes
 */
class DocumentInfo extends Shape
{
    /**
     * @param array{
     *     DocumentId: string,
     *     Attributes?: list<DocumentAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
