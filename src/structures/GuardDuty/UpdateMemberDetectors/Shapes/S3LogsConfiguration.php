<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enable
 */
class S3LogsConfiguration extends Shape
{
    /**
     * @param array{Enable: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
