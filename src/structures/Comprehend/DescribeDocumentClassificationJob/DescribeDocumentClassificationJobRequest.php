<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDocumentClassificationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeDocumentClassificationJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
