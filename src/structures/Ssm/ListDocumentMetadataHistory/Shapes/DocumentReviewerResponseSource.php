<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $UpdatedTime
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null $ReviewStatus
 * @property list<DocumentReviewCommentSource>|null $Comment
 * @property string|null $Reviewer
 */
class DocumentReviewerResponseSource extends Shape
{
    /**
     * @param array{
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     ReviewStatus?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null,
     *     Comment?: list<DocumentReviewCommentSource>|null,
     *     Reviewer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
