<?php

namespace Sunaoka\Aws\Structures\kendra\BatchGetDocumentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentId
 * @property list<DocumentAttribute>|null $Attributes
 */
class DocumentInfo extends Shape
{
    /**
     * @param array{
     *     DocumentId: string,
     *     Attributes?: list<DocumentAttribute>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
