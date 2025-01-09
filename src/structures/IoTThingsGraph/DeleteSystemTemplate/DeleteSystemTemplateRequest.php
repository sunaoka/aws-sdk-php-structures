<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeleteSystemTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteSystemTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
