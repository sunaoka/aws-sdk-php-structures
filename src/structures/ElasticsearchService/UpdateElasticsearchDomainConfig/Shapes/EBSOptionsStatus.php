<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EBSOptions $Options
 * @property OptionStatus $Status
 */
class EBSOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: EBSOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
