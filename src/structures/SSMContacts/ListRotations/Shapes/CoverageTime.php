<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HandOffTime|null $Start
 * @property HandOffTime|null $End
 */
class CoverageTime extends Shape
{
    /**
     * @param array{
     *     Start?: HandOffTime|null,
     *     End?: HandOffTime|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
