<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property list<string> $dependencies
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin' $type
 * @property string $prompt
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM' $pluginType
 * @property string $pluginId
 */
class QPluginCard extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     dependencies: list<string>,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin',
     *     prompt: string,
     *     pluginType: 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM',
     *     pluginId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
