<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $recoveryInstanceIDs
 * @property list<string>|null $sourceServerIDs
 */
class DescribeRecoveryInstancesRequestFilters extends Shape
{
    /**
     * @param array{
     *     recoveryInstanceIDs?: list<string>|null,
     *     sourceServerIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
