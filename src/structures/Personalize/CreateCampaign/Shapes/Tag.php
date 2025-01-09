<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tagKey
 * @property string $tagValue
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     tagKey: string,
     *     tagValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
