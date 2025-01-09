<?php

namespace Sunaoka\Aws\Structures\IVS\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property 'SD'|'HD'|'FULL_HD' $maximumResolution
 * @property 'ALLOW'|'REQUIRE' $policy
 */
class MultitrackInputConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     maximumResolution?: 'SD'|'HD'|'FULL_HD',
     *     policy?: 'ALLOW'|'REQUIRE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
