<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentReactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $emoji
 * @property string|null $shortCode
 * @property string|null $unicode
 */
class ReactionValueFormats extends Shape
{
    /**
     * @param array{
     *     emoji?: string|null,
     *     shortCode?: string|null,
     *     unicode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
