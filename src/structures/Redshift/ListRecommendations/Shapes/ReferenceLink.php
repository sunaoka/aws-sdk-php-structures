<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $Link
 */
class ReferenceLink extends Shape
{
    /**
     * @param array{
     *     Text?: string,
     *     Link?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
