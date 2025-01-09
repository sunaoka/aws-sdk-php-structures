<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateProvisioningTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string $description
 * @property bool $enabled
 * @property int $defaultVersionId
 * @property string $provisioningRoleArn
 * @property Shapes\ProvisioningHook $preProvisioningHook
 * @property bool $removePreProvisioningHook
 */
class UpdateProvisioningTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     description?: string,
     *     enabled?: bool,
     *     defaultVersionId?: int,
     *     provisioningRoleArn?: string,
     *     preProvisioningHook?: Shapes\ProvisioningHook,
     *     removePreProvisioningHook?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
