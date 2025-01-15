<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Reason
 * @property string|null $Message
 * @property string|null $LogFile
 */
class FailureDetails extends Shape
{
    /**
     * @param array{
     *     Reason?: string|null,
     *     Message?: string|null,
     *     LogFile?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
