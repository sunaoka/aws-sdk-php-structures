<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeleteFlowTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteFlowTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
