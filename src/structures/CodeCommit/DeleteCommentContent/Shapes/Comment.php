<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteCommentContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $commentId
 * @property string|null $content
 * @property string|null $inReplyTo
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property string|null $authorArn
 * @property bool|null $deleted
 * @property string|null $clientRequestToken
 * @property list<string>|null $callerReactions
 * @property array<string, int>|null $reactionCounts
 */
class Comment extends Shape
{
    /**
     * @param array{
     *     commentId?: string|null,
     *     content?: string|null,
     *     inReplyTo?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     authorArn?: string|null,
     *     deleted?: bool|null,
     *     clientRequestToken?: string|null,
     *     callerReactions?: list<string>|null,
     *     reactionCounts?: array<string, int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
