<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdatedTime
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED' $ReviewStatus
 * @property list<DocumentReviewCommentSource> $Comment
 * @property string $Reviewer
 */
class DocumentReviewerResponseSource extends Shape
{
    /**
     * @param array{
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     UpdatedTime?: \Aws\Api\DateTimeResult,
     *     ReviewStatus?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED',
     *     Comment?: list<DocumentReviewCommentSource>,
     *     Reviewer?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
