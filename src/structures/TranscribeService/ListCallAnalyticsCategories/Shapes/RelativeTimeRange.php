<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $StartPercentage
 * @property int<0, 100>|null $EndPercentage
 * @property int<0, 100>|null $First
 * @property int<0, 100>|null $Last
 */
class RelativeTimeRange extends Shape
{
    /**
     * @param array{
     *     StartPercentage?: int<0, 100>|null,
     *     EndPercentage?: int<0, 100>|null,
     *     First?: int<0, 100>|null,
     *     Last?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
