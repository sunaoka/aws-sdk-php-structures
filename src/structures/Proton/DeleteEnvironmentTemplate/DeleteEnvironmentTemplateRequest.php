<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteEnvironmentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteEnvironmentTemplateRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
