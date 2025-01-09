<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Reason
 * @property string $Message
 * @property string $LogFile
 */
class FailureDetails extends Shape
{
    /**
     * @param array{
     *     Reason?: string,
     *     Message?: string,
     *     LogFile?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
