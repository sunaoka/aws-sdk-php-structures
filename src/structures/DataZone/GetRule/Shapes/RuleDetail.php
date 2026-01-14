<?php

namespace Sunaoka\Aws\Structures\DataZone\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataFormEnforcementDetail|null $metadataFormEnforcementDetail
 * @property GlossaryTermEnforcementDetail|null $glossaryTermEnforcementDetail
 */
class RuleDetail extends Shape
{
    /**
     * @param array{
     *     metadataFormEnforcementDetail?: MetadataFormEnforcementDetail|null,
     *     glossaryTermEnforcementDetail?: GlossaryTermEnforcementDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
