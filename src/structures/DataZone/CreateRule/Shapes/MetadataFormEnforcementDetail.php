<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetadataFormReference>|null $requiredMetadataForms
 */
class MetadataFormEnforcementDetail extends Shape
{
    /**
     * @param array{requiredMetadataForms?: list<MetadataFormReference>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
