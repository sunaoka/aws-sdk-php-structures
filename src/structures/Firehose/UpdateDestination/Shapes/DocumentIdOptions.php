<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIREHOSE_DEFAULT'|'NO_DOCUMENT_ID' $DefaultDocumentIdFormat
 */
class DocumentIdOptions extends Shape
{
    /**
     * @param array{DefaultDocumentIdFormat: 'FIREHOSE_DEFAULT'|'NO_DOCUMENT_ID'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
