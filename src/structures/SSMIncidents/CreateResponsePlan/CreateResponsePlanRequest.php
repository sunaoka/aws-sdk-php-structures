<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Action>|null $actions
 * @property Shapes\ChatChannel|null $chatChannel
 * @property string|null $clientToken
 * @property string|null $displayName
 * @property list<string>|null $engagements
 * @property Shapes\IncidentTemplate $incidentTemplate
 * @property list<Shapes\Integration>|null $integrations
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateResponsePlanRequest extends Request
{
    /**
     * @param array{
     *     actions?: list<Shapes\Action>|null,
     *     chatChannel?: Shapes\ChatChannel|null,
     *     clientToken?: string|null,
     *     displayName?: string|null,
     *     engagements?: list<string>|null,
     *     incidentTemplate: Shapes\IncidentTemplate,
     *     integrations?: list<Shapes\Integration>|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
