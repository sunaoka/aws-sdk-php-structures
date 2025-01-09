<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentReactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $emoji
 * @property string $shortCode
 * @property string $unicode
 */
class ReactionValueFormats extends Shape
{
    /**
     * @param array{
     *     emoji?: string,
     *     shortCode?: string,
     *     unicode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
