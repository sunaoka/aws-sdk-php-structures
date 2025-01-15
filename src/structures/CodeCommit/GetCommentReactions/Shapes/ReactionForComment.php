<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentReactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReactionValueFormats|null $reaction
 * @property list<string>|null $reactionUsers
 * @property int|null $reactionsFromDeletedUsersCount
 */
class ReactionForComment extends Shape
{
    /**
     * @param array{
     *     reaction?: ReactionValueFormats|null,
     *     reactionUsers?: list<string>|null,
     *     reactionsFromDeletedUsersCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
