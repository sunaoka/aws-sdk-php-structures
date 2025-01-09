<?php

namespace Sunaoka\Aws\Structures\Ses\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Template $Template
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{Template: Shapes\Template} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
