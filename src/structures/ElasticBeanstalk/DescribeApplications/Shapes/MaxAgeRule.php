<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int|null $MaxAgeInDays
 * @property bool|null $DeleteSourceFromS3
 */
class MaxAgeRule extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MaxAgeInDays?: int|null,
     *     DeleteSourceFromS3?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
