<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EksContainerOverride>|null $containers
 * @property list<EksContainerOverride>|null $initContainers
 * @property EksMetadata|null $metadata
 */
class EksPodPropertiesOverride extends Shape
{
    /**
     * @param array{
     *     containers?: list<EksContainerOverride>|null,
     *     initContainers?: list<EksContainerOverride>|null,
     *     metadata?: EksMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
