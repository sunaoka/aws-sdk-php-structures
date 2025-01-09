<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteServiceTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteServiceTemplateRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
