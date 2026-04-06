<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIMLOptionsOutput|null $Options
 * @property OptionStatus|null $Status
 */
class AIMLOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: AIMLOptionsOutput|null,
     *     Status?: OptionStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
