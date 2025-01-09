<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inputName
 * @property string $inputDescription
 * @property Shapes\InputDefinition $inputDefinition
 */
class UpdateInputRequest extends Request
{
    /**
     * @param array{
     *     inputName: string,
     *     inputDescription?: string,
     *     inputDefinition: Shapes\InputDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
