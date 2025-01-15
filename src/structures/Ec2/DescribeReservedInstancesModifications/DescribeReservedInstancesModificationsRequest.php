<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ReservedInstancesModificationIds
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeReservedInstancesModificationsRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstancesModificationIds?: list<string>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
