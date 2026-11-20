<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProjectsContext|null $CustomerProject
 * @property LeadContext|null $Lead
 * @property ProspectingResult|null $ProspectingResult
 * @property CustomerAccountContext|null $CustomerAccount
 */
class EngagementContextPayload extends Shape
{
    /**
     * @param array{
     *     CustomerProject?: CustomerProjectsContext|null,
     *     Lead?: LeadContext|null,
     *     ProspectingResult?: ProspectingResult|null,
     *     CustomerAccount?: CustomerAccountContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
