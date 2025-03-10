<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteCustomVerificationEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 */
class DeleteCustomVerificationEmailTemplateRequest extends Request
{
    /**
     * @param array{TemplateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
