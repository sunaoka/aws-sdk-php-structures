<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeComments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommentId
 * @property string $ParentId
 * @property string $ThreadId
 * @property string $Text
 * @property User $Contributor
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property 'DRAFT'|'PUBLISHED'|'DELETED' $Status
 * @property 'PUBLIC'|'PRIVATE' $Visibility
 * @property string $RecipientId
 */
class Comment extends Shape
{
    /**
     * @param array{
     *     CommentId: string,
     *     ParentId?: string,
     *     ThreadId?: string,
     *     Text?: string,
     *     Contributor?: User,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     Status?: 'DRAFT'|'PUBLISHED'|'DELETED',
     *     Visibility?: 'PUBLIC'|'PRIVATE',
     *     RecipientId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
