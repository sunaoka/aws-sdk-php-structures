<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeScheduleRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
