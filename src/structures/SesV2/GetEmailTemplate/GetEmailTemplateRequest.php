<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 */
class GetEmailTemplateRequest extends Request
{
    /**
     * @param array{TemplateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
