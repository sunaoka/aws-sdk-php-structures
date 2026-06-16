<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateLeadContext|null $Lead
 * @property CustomerProjectsContext|null $CustomerProject
 * @property ProspectingResult|null $ProspectingResult
 */
class UpdateEngagementContextPayload extends Shape
{
    /**
     * @param array{
     *     Lead?: UpdateLeadContext|null,
     *     CustomerProject?: CustomerProjectsContext|null,
     *     ProspectingResult?: ProspectingResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
