<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARN
 * @property string $RoleARN
 */
class KinesisFirehoseOutputDescription extends Shape
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     RoleARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
