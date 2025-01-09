<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeProvisioningTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 */
class DescribeProvisioningTemplateRequest extends Request
{
    /**
     * @param array{templateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
