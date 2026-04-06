<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteStateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteStateTemplateRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
