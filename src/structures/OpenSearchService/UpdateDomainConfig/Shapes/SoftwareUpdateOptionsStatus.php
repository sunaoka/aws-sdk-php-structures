<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SoftwareUpdateOptions|null $Options
 * @property OptionStatus|null $Status
 */
class SoftwareUpdateOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: SoftwareUpdateOptions|null,
     *     Status?: OptionStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
