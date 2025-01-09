<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EksContainerOverride> $containers
 * @property list<EksContainerOverride> $initContainers
 * @property EksMetadata $metadata
 */
class EksPodPropertiesOverride extends Shape
{
    /**
     * @param array{
     *     containers?: list<EksContainerOverride>,
     *     initContainers?: list<EksContainerOverride>,
     *     metadata?: EksMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
