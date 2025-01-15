<?php

namespace Sunaoka\Aws\Structures\Redshift\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 * @property string|null $Link
 */
class ReferenceLink extends Shape
{
    /**
     * @param array{
     *     Text?: string|null,
     *     Link?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
