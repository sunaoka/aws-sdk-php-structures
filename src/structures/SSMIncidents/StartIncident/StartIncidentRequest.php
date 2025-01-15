<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\StartIncident;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property int<1, 5>|null $impact
 * @property list<Shapes\RelatedItem>|null $relatedItems
 * @property string $responsePlanArn
 * @property string|null $title
 * @property Shapes\TriggerDetails|null $triggerDetails
 */
class StartIncidentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     impact?: int<1, 5>|null,
     *     relatedItems?: list<Shapes\RelatedItem>|null,
     *     responsePlanArn: string,
     *     title?: string|null,
     *     triggerDetails?: Shapes\TriggerDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
