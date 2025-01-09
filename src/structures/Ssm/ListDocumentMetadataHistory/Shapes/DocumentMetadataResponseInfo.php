<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DocumentReviewerResponseSource> $ReviewerResponse
 */
class DocumentMetadataResponseInfo extends Shape
{
    /**
     * @param array{ReviewerResponse?: list<DocumentReviewerResponseSource>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
