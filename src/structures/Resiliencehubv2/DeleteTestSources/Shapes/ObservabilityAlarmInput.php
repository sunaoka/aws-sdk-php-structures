<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteTestSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmArn
 */
class ObservabilityAlarmInput extends Shape
{
    /**
     * @param array{alarmArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
