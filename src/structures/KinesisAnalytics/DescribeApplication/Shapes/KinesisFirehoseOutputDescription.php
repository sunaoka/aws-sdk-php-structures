<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property string|null $RoleARN
 */
class KinesisFirehoseOutputDescription extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     RoleARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
