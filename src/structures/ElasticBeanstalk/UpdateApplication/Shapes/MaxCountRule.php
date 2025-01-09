<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $MaxCount
 * @property bool $DeleteSourceFromS3
 */
class MaxCountRule extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MaxCount?: int,
     *     DeleteSourceFromS3?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
