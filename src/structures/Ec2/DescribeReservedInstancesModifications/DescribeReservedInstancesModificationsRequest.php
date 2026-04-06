<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $ReservedInstancesModificationIds
 * @property string|null $NextToken
 */
class DescribeReservedInstancesModificationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     ReservedInstancesModificationIds?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
