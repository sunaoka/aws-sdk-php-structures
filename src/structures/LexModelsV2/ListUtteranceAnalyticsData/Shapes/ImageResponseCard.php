<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $subtitle
 * @property string $imageUrl
 * @property list<Button> $buttons
 */
class ImageResponseCard extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     subtitle?: string,
     *     imageUrl?: string,
     *     buttons?: list<Button>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
