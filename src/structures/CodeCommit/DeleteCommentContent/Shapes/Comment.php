<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteCommentContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $commentId
 * @property string $content
 * @property string $inReplyTo
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property string $authorArn
 * @property bool $deleted
 * @property string $clientRequestToken
 * @property list<string> $callerReactions
 * @property array<string, int> $reactionCounts
 */
class Comment extends Shape
{
    /**
     * @param array{
     *     commentId?: string,
     *     content?: string,
     *     inReplyTo?: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     authorArn?: string,
     *     deleted?: bool,
     *     clientRequestToken?: string,
     *     callerReactions?: list<string>,
     *     reactionCounts?: array<string, int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
