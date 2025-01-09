<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\StartIncident;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property int $impact
 * @property list<Shapes\RelatedItem> $relatedItems
 * @property string $responsePlanArn
 * @property string $title
 * @property Shapes\TriggerDetails $triggerDetails
 */
class StartIncidentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     impact?: int,
     *     relatedItems?: list<Shapes\RelatedItem>,
     *     responsePlanArn: string,
     *     title?: string,
     *     triggerDetails?: Shapes\TriggerDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
