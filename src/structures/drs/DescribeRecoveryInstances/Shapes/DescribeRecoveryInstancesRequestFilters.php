<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $recoveryInstanceIDs
 * @property list<string> $sourceServerIDs
 */
class DescribeRecoveryInstancesRequestFilters extends Shape
{
    /**
     * @param array{
     *     recoveryInstanceIDs?: list<string>,
     *     sourceServerIDs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
