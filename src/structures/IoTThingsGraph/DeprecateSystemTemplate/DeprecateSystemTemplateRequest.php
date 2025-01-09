<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeprecateSystemTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeprecateSystemTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
