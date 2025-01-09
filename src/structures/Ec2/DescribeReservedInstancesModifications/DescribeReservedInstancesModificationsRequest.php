<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ReservedInstancesModificationIds
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 */
class DescribeReservedInstancesModificationsRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstancesModificationIds?: list<string>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
