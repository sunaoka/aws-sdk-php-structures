<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopTrainingDocumentClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentClassifierArn
 */
class StopTrainingDocumentClassifierRequest extends Request
{
    /**
     * @param array{DocumentClassifierArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
