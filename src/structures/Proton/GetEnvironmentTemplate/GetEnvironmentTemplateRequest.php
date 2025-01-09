<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironmentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetEnvironmentTemplateRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
