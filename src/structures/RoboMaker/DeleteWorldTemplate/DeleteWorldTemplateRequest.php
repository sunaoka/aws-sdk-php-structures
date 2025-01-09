<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeleteWorldTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $template
 */
class DeleteWorldTemplateRequest extends Request
{
    /**
     * @param array{template: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
