<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateProvisioningTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string|null $description
 * @property bool|null $enabled
 * @property int|null $defaultVersionId
 * @property string|null $provisioningRoleArn
 * @property Shapes\ProvisioningHook|null $preProvisioningHook
 * @property bool|null $removePreProvisioningHook
 */
class UpdateProvisioningTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     description?: string|null,
     *     enabled?: bool|null,
     *     defaultVersionId?: int|null,
     *     provisioningRoleArn?: string|null,
     *     preProvisioningHook?: Shapes\ProvisioningHook|null,
     *     removePreProvisioningHook?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
