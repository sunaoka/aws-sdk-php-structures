<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SendForReview'|'UpdateReview'|'Approve'|'Reject' $Action
 * @property list<DocumentReviewCommentSource>|null $Comment
 */
class DocumentReviews extends Shape
{
    /**
     * @param array{
     *     Action: 'SendForReview'|'UpdateReview'|'Approve'|'Reject',
     *     Comment?: list<DocumentReviewCommentSource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
