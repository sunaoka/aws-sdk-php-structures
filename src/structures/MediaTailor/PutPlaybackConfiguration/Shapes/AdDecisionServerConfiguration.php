<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpRequest|null $HttpRequest
 * @property VastResponse|null $VastResponse
 */
class AdDecisionServerConfiguration extends Shape
{
    /**
     * @param array{
     *     HttpRequest?: HttpRequest|null,
     *     VastResponse?: VastResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
