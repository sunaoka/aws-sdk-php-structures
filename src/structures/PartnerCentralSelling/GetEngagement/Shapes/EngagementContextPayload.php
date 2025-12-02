<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProjectsContext|null $CustomerProject
 * @property LeadContext|null $Lead
 */
class EngagementContextPayload extends Shape
{
    /**
     * @param array{
     *     CustomerProject?: CustomerProjectsContext|null,
     *     Lead?: LeadContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
