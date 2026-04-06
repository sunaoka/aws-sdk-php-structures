<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenterOptions $Options
 * @property OptionStatus $Status
 */
class IdentityCenterOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: IdentityCenterOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
