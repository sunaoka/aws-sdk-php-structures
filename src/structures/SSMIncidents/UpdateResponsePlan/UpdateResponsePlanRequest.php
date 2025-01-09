<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateResponsePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Action> $actions
 * @property string $arn
 * @property Shapes\ChatChannel $chatChannel
 * @property string $clientToken
 * @property string $displayName
 * @property list<string> $engagements
 * @property string $incidentTemplateDedupeString
 * @property int<1, 5> $incidentTemplateImpact
 * @property list<Shapes\NotificationTargetItem> $incidentTemplateNotificationTargets
 * @property string $incidentTemplateSummary
 * @property array<string, string> $incidentTemplateTags
 * @property string $incidentTemplateTitle
 * @property list<Shapes\Integration> $integrations
 */
class UpdateResponsePlanRequest extends Request
{
    /**
     * @param array{
     *     actions?: list<Shapes\Action>,
     *     arn: string,
     *     chatChannel?: Shapes\ChatChannel,
     *     clientToken?: string,
     *     displayName?: string,
     *     engagements?: list<string>,
     *     incidentTemplateDedupeString?: string,
     *     incidentTemplateImpact?: int<1, 5>,
     *     incidentTemplateNotificationTargets?: list<Shapes\NotificationTargetItem>,
     *     incidentTemplateSummary?: string,
     *     incidentTemplateTags?: array<string, string>,
     *     incidentTemplateTitle?: string,
     *     integrations?: list<Shapes\Integration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
