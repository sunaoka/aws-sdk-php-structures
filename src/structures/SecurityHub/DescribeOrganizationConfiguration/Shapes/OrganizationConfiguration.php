<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTRAL'|'LOCAL' $ConfigurationType
 * @property 'PENDING'|'ENABLED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class OrganizationConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType?: 'CENTRAL'|'LOCAL',
     *     Status?: 'PENDING'|'ENABLED'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
