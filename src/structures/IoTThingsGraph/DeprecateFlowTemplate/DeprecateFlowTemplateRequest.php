<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeprecateFlowTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeprecateFlowTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
