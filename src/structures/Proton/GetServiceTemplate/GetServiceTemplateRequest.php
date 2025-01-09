<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetServiceTemplateRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
