<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inputName
 * @property string|null $inputDescription
 * @property Shapes\InputDefinition $inputDefinition
 * @property list<Shapes\Tag>|null $tags
 */
class CreateInputRequest extends Request
{
    /**
     * @param array{
     *     inputName: string,
     *     inputDescription?: string|null,
     *     inputDefinition: Shapes\InputDefinition,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
