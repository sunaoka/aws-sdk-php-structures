<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeBlueGreenDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueGreenDeploymentIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribeBlueGreenDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     BlueGreenDeploymentIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
