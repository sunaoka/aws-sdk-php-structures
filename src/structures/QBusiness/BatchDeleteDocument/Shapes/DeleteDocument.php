<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchDeleteDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentId
 */
class DeleteDocument extends Shape
{
    /**
     * @param array{documentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
