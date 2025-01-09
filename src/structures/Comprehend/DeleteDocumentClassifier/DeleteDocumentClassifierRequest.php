<?php

namespace Sunaoka\Aws\Structures\Comprehend\DeleteDocumentClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentClassifierArn
 */
class DeleteDocumentClassifierRequest extends Request
{
    /**
     * @param array{DocumentClassifierArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
