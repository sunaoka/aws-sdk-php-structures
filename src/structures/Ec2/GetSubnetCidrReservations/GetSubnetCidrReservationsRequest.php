<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSubnetCidrReservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property string $SubnetId
 * @property bool $DryRun
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetSubnetCidrReservationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     SubnetId: string,
     *     DryRun?: bool,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
