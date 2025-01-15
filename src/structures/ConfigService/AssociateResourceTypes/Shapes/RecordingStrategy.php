<?php

namespace Sunaoka\Aws\Structures\ConfigService\AssociateResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL_SUPPORTED_RESOURCE_TYPES'|'INCLUSION_BY_RESOURCE_TYPES'|'EXCLUSION_BY_RESOURCE_TYPES'|null $useOnly
 */
class RecordingStrategy extends Shape
{
    /**
     * @param array{useOnly?: 'ALL_SUPPORTED_RESOURCE_TYPES'|'INCLUSION_BY_RESOURCE_TYPES'|'EXCLUSION_BY_RESOURCE_TYPES'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
