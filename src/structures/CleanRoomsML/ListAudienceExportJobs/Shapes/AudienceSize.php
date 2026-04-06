<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ABSOLUTE'|'PERCENTAGE' $type
 * @property int<1, 20000000> $value
 */
class AudienceSize extends Shape
{
    /**
     * @param array{
     *     type: 'ABSOLUTE'|'PERCENTAGE',
     *     value: int<1, 20000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
