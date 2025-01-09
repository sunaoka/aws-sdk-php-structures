<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string $templateBody
 * @property bool $setAsDefault
 */
class CreateProvisioningTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     templateBody: string,
     *     setAsDefault?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
