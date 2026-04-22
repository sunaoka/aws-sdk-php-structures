<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property 'ALLOW'|'REQUIRE'|null $policy
 * @property 'SD'|'HD'|'FULL_HD'|null $maximumResolution
 */
class MultitrackInputConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     policy?: 'ALLOW'|'REQUIRE'|null,
     *     maximumResolution?: 'SD'|'HD'|'FULL_HD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
