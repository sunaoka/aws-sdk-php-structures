<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationId
 * @property string|null $OrganizationalUnitId
 */
class AwsOrganizationScope extends Shape
{
    /**
     * @param array{
     *     OrganizationId?: string|null,
     *     OrganizationalUnitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
