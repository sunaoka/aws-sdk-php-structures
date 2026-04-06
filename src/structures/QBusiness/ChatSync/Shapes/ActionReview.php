<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pluginId
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|null $pluginType
 * @property array<string, ActionReviewPayloadField>|null $payload
 * @property string|null $payloadFieldNameSeparator
 */
class ActionReview extends Shape
{
    /**
     * @param array{
     *     pluginId?: string|null,
     *     pluginType?: 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|null,
     *     payload?: array<string, ActionReviewPayloadField>|null,
     *     payloadFieldNameSeparator?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
