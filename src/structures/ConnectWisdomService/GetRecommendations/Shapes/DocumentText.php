<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Highlight> $highlights
 * @property string $text
 */
class DocumentText extends Shape
{
    /**
     * @param array{
     *     highlights?: list<Highlight>,
     *     text?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
