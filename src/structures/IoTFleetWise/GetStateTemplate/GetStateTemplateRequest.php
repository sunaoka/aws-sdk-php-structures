<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetStateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetStateTemplateRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
