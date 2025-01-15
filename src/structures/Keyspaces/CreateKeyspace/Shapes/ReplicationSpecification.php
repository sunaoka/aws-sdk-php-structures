<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateKeyspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGLE_REGION'|'MULTI_REGION' $replicationStrategy
 * @property list<string>|null $regionList
 */
class ReplicationSpecification extends Shape
{
    /**
     * @param array{
     *     replicationStrategy: 'SINGLE_REGION'|'MULTI_REGION',
     *     regionList?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
