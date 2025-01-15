<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeComments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommentId
 * @property string|null $ParentId
 * @property string|null $ThreadId
 * @property string|null $Text
 * @property User|null $Contributor
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property 'DRAFT'|'PUBLISHED'|'DELETED'|null $Status
 * @property 'PUBLIC'|'PRIVATE'|null $Visibility
 * @property string|null $RecipientId
 */
class Comment extends Shape
{
    /**
     * @param array{
     *     CommentId: string,
     *     ParentId?: string|null,
     *     ThreadId?: string|null,
     *     Text?: string|null,
     *     Contributor?: User|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'DRAFT'|'PUBLISHED'|'DELETED'|null,
     *     Visibility?: 'PUBLIC'|'PRIVATE'|null,
     *     RecipientId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
