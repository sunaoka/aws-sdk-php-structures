<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Template $Template
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{Template: Shapes\Template} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
