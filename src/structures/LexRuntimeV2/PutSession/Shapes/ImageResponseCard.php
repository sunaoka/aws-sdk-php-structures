<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string|null $subtitle
 * @property string|null $imageUrl
 * @property list<Button>|null $buttons
 */
class ImageResponseCard extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     subtitle?: string|null,
     *     imageUrl?: string|null,
     *     buttons?: list<Button>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
