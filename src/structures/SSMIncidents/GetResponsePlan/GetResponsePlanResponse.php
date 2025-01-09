<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetResponsePlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Action> $actions
 * @property string $arn
 * @property Shapes\ChatChannel $chatChannel
 * @property string $displayName
 * @property list<string> $engagements
 * @property Shapes\IncidentTemplate $incidentTemplate
 * @property list<Shapes\Integration> $integrations
 * @property string $name
 */
class GetResponsePlanResponse extends Response
{
}
