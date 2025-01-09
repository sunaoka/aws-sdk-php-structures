<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentReactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReactionValueFormats $reaction
 * @property list<string> $reactionUsers
 * @property int $reactionsFromDeletedUsersCount
 */
class ReactionForComment extends Shape
{
    /**
     * @param array{
     *     reaction?: ReactionValueFormats,
     *     reactionUsers?: list<string>,
     *     reactionsFromDeletedUsersCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
