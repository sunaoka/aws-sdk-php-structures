<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteProvisioningTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 */
class DeleteProvisioningTemplateRequest extends Request
{
    /**
     * @param array{templateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
