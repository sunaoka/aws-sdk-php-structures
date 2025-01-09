<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartAudienceExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ABSOLUTE'|'PERCENTAGE' $type
 * @property int $value
 */
class AudienceSize extends Shape
{
    /**
     * @param array{
     *     type: 'ABSOLUTE'|'PERCENTAGE',
     *     value: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
