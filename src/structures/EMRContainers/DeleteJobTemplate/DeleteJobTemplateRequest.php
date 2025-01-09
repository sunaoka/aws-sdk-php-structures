<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DeleteJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteJobTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
