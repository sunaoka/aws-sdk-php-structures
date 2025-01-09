<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string $description
 * @property string $templateBody
 * @property bool $enabled
 * @property string $provisioningRoleArn
 * @property Shapes\ProvisioningHook $preProvisioningHook
 * @property list<Shapes\Tag> $tags
 * @property 'FLEET_PROVISIONING'|'JITP' $type
 */
class CreateProvisioningTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     description?: string,
     *     templateBody: string,
     *     enabled?: bool,
     *     provisioningRoleArn: string,
     *     preProvisioningHook?: Shapes\ProvisioningHook,
     *     tags?: list<Shapes\Tag>,
     *     type?: 'FLEET_PROVISIONING'|'JITP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
