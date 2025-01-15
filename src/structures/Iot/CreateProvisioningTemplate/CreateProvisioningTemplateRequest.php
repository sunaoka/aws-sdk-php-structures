<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string|null $description
 * @property string $templateBody
 * @property bool|null $enabled
 * @property string $provisioningRoleArn
 * @property Shapes\ProvisioningHook|null $preProvisioningHook
 * @property list<Shapes\Tag>|null $tags
 * @property 'FLEET_PROVISIONING'|'JITP'|null $type
 */
class CreateProvisioningTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     description?: string|null,
     *     templateBody: string,
     *     enabled?: bool|null,
     *     provisioningRoleArn: string,
     *     preProvisioningHook?: Shapes\ProvisioningHook|null,
     *     tags?: list<Shapes\Tag>|null,
     *     type?: 'FLEET_PROVISIONING'|'JITP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
