<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DeleteInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inputName
 */
class DeleteInputRequest extends Request
{
    /**
     * @param array{inputName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
