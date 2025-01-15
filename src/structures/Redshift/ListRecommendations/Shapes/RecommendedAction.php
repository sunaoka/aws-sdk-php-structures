<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 * @property string|null $Database
 * @property string|null $Command
 * @property 'SQL'|'CLI'|null $Type
 */
class RecommendedAction extends Shape
{
    /**
     * @param array{
     *     Text?: string|null,
     *     Database?: string|null,
     *     Command?: string|null,
     *     Type?: 'SQL'|'CLI'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
