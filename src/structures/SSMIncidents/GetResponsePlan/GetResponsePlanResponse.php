<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetResponsePlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Action>|null $actions
 * @property string $arn
 * @property Shapes\ChatChannel|null $chatChannel
 * @property string|null $displayName
 * @property list<string>|null $engagements
 * @property Shapes\IncidentTemplate $incidentTemplate
 * @property list<Shapes\Integration>|null $integrations
 * @property string $name
 */
class GetResponsePlanResponse extends Response
{
}
