<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeBlueGreenDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BlueGreenDeploymentIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int<20, 100>|null $MaxRecords
 */
class DescribeBlueGreenDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     BlueGreenDeploymentIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int<20, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
