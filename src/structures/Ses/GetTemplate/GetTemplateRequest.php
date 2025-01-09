<?php

namespace Sunaoka\Aws\Structures\Ses\GetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 */
class GetTemplateRequest extends Request
{
    /**
     * @param array{TemplateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
