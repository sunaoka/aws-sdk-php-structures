<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIMLOptionsOutput $Options
 * @property OptionStatus $Status
 */
class AIMLOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: AIMLOptionsOutput,
     *     Status?: OptionStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
