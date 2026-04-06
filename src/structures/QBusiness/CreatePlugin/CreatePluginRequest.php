<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreatePlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $displayName
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM' $type
 * @property Shapes\PluginAuthConfiguration $authConfiguration
 * @property string|null $serverUrl
 * @property Shapes\CustomPluginConfiguration|null $customPluginConfiguration
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreatePluginRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     displayName: string,
     *     type: 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM',
     *     authConfiguration: Shapes\PluginAuthConfiguration,
     *     serverUrl?: string|null,
     *     customPluginConfiguration?: Shapes\CustomPluginConfiguration|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
