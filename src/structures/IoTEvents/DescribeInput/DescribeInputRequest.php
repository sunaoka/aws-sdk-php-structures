<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inputName
 */
class DescribeInputRequest extends Request
{
    /**
     * @param array{inputName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
