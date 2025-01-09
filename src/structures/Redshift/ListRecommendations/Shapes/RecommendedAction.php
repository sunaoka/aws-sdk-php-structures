<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $Database
 * @property string $Command
 * @property 'SQL'|'CLI' $Type
 */
class RecommendedAction extends Shape
{
    /**
     * @param array{
     *     Text?: string,
     *     Database?: string,
     *     Command?: string,
     *     Type?: 'SQL'|'CLI'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
