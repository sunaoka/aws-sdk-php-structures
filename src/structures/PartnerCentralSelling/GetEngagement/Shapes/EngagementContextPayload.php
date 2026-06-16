<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProjectsContext|null $CustomerProject
 * @property LeadContext|null $Lead
 * @property ProspectingResult|null $ProspectingResult
 */
class EngagementContextPayload extends Shape
{
    /**
     * @param array{
     *     CustomerProject?: CustomerProjectsContext|null,
     *     Lead?: LeadContext|null,
     *     ProspectingResult?: ProspectingResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
