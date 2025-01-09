<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetadataFormReference> $requiredMetadataForms
 */
class MetadataFormEnforcementDetail extends Shape
{
    /**
     * @param array{requiredMetadataForms?: list<MetadataFormReference>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
