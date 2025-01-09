<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $MaxAgeInDays
 * @property bool $DeleteSourceFromS3
 */
class MaxAgeRule extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MaxAgeInDays?: int,
     *     DeleteSourceFromS3?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
