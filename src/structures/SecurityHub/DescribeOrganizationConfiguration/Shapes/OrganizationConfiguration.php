<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTRAL'|'LOCAL'|null $ConfigurationType
 * @property 'PENDING'|'ENABLED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 */
class OrganizationConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType?: 'CENTRAL'|'LOCAL'|null,
     *     Status?: 'PENDING'|'ENABLED'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
