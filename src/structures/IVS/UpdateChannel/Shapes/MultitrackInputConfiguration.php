<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property 'SD'|'HD'|'FULL_HD'|null $maximumResolution
 * @property 'ALLOW'|'REQUIRE'|null $policy
 */
class MultitrackInputConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     maximumResolution?: 'SD'|'HD'|'FULL_HD'|null,
     *     policy?: 'ALLOW'|'REQUIRE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
