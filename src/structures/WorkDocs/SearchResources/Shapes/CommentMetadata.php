<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CommentId
 * @property User|null $Contributor
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property 'DRAFT'|'PUBLISHED'|'DELETED'|null $CommentStatus
 * @property string|null $RecipientId
 * @property string|null $ContributorId
 */
class CommentMetadata extends Shape
{
    /**
     * @param array{
     *     CommentId?: string|null,
     *     Contributor?: User|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CommentStatus?: 'DRAFT'|'PUBLISHED'|'DELETED'|null,
     *     RecipientId?: string|null,
     *     ContributorId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
