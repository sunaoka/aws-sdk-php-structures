<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Action> $actions
 * @property Shapes\ChatChannel $chatChannel
 * @property string $clientToken
 * @property string $displayName
 * @property list<string> $engagements
 * @property Shapes\IncidentTemplate $incidentTemplate
 * @property list<Shapes\Integration> $integrations
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateResponsePlanRequest extends Request
{
    /**
     * @param array{
     *     actions?: list<Shapes\Action>,
     *     chatChannel?: Shapes\ChatChannel,
     *     clientToken?: string,
     *     displayName?: string,
     *     engagements?: list<string>,
     *     incidentTemplate: Shapes\IncidentTemplate,
     *     integrations?: list<Shapes\Integration>,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
