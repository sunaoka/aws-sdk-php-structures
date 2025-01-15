<?php

namespace Sunaoka\Aws\Structures\Keyspaces\ListKeyspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $keyspaceName
 * @property string $resourceArn
 * @property 'SINGLE_REGION'|'MULTI_REGION' $replicationStrategy
 * @property list<string>|null $replicationRegions
 */
class KeyspaceSummary extends Shape
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     resourceArn: string,
     *     replicationStrategy: 'SINGLE_REGION'|'MULTI_REGION',
     *     replicationRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
