<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateLeadContext|null $Lead
 * @property CustomerProjectsContext|null $CustomerProject
 */
class UpdateEngagementContextPayload extends Shape
{
    /**
     * @param array{
     *     Lead?: UpdateLeadContext|null,
     *     CustomerProject?: CustomerProjectsContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
