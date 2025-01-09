<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inputName
 * @property string $inputDescription
 * @property Shapes\InputDefinition $inputDefinition
 * @property list<Shapes\Tag> $tags
 */
class CreateInputRequest extends Request
{
    /**
     * @param array{
     *     inputName: string,
     *     inputDescription?: string,
     *     inputDefinition: Shapes\InputDefinition,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
