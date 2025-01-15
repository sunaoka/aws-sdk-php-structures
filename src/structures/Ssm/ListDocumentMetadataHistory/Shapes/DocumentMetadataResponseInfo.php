<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DocumentReviewerResponseSource>|null $ReviewerResponse
 */
class DocumentMetadataResponseInfo extends Shape
{
    /**
     * @param array{ReviewerResponse?: list<DocumentReviewerResponseSource>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
