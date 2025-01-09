<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDocumentClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentClassifierArn
 */
class DescribeDocumentClassifierRequest extends Request
{
    /**
     * @param array{DocumentClassifierArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
