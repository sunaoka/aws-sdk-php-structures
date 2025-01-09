<?php

namespace Sunaoka\Aws\Structures\MediaConvert\DeleteJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteJobTemplateRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
