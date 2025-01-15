<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int|null $MaxCount
 * @property bool|null $DeleteSourceFromS3
 */
class MaxCountRule extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MaxCount?: int|null,
     *     DeleteSourceFromS3?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
