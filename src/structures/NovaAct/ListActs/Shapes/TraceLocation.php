<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListActs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $locationType
 * @property string $location
 */
class TraceLocation extends Shape
{
    /**
     * @param array{
     *     locationType: 'S3',
     *     location: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
