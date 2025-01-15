<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECONDS'|'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'INFINITE'|'UNSPECIFIED' $Type
 * @property int<0, 65535>|null $Value
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     Type: 'SECONDS'|'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'INFINITE'|'UNSPECIFIED',
     *     Value?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
