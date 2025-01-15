<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateResponsePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Action>|null $actions
 * @property string $arn
 * @property Shapes\ChatChannel|null $chatChannel
 * @property string|null $clientToken
 * @property string|null $displayName
 * @property list<string>|null $engagements
 * @property string|null $incidentTemplateDedupeString
 * @property int<1, 5>|null $incidentTemplateImpact
 * @property list<Shapes\NotificationTargetItem>|null $incidentTemplateNotificationTargets
 * @property string|null $incidentTemplateSummary
 * @property array<string, string>|null $incidentTemplateTags
 * @property string|null $incidentTemplateTitle
 * @property list<Shapes\Integration>|null $integrations
 */
class UpdateResponsePlanRequest extends Request
{
    /**
     * @param array{
     *     actions?: list<Shapes\Action>|null,
     *     arn: string,
     *     chatChannel?: Shapes\ChatChannel|null,
     *     clientToken?: string|null,
     *     displayName?: string|null,
     *     engagements?: list<string>|null,
     *     incidentTemplateDedupeString?: string|null,
     *     incidentTemplateImpact?: int<1, 5>|null,
     *     incidentTemplateNotificationTargets?: list<Shapes\NotificationTargetItem>|null,
     *     incidentTemplateSummary?: string|null,
     *     incidentTemplateTags?: array<string, string>|null,
     *     incidentTemplateTitle?: string|null,
     *     integrations?: list<Shapes\Integration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
