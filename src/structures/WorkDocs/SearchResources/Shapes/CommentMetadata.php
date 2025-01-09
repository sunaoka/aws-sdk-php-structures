<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommentId
 * @property User $Contributor
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property 'DRAFT'|'PUBLISHED'|'DELETED' $CommentStatus
 * @property string $RecipientId
 * @property string $ContributorId
 */
class CommentMetadata extends Shape
{
    /**
     * @param array{
     *     CommentId?: string,
     *     Contributor?: User,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     CommentStatus?: 'DRAFT'|'PUBLISHED'|'DELETED',
     *     RecipientId?: string,
     *     ContributorId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
