<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $End
 * @property string|null $Start
 */
class QuietTime extends Shape
{
    /**
     * @param array{
     *     End?: string|null,
     *     Start?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
