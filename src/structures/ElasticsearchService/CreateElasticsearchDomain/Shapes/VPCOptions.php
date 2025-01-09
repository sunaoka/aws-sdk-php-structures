<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 */
class VPCOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>,
     *     SecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
