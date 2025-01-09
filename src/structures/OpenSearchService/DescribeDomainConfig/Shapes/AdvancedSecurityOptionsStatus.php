<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdvancedSecurityOptions $Options
 * @property OptionStatus $Status
 */
class AdvancedSecurityOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: AdvancedSecurityOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
