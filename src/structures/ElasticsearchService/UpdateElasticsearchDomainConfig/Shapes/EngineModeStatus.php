<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GENERAL'|'OPTIMIZED' $Options
 * @property OptionStatus $Status
 */
class EngineModeStatus extends Shape
{
    /**
     * @param array{
     *     Options: 'GENERAL'|'OPTIMIZED',
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
