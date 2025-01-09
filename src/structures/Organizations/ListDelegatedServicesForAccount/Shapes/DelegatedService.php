<?php

namespace Sunaoka\Aws\Structures\Organizations\ListDelegatedServicesForAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServicePrincipal
 * @property \Aws\Api\DateTimeResult $DelegationEnabledDate
 */
class DelegatedService extends Shape
{
    /**
     * @param array{
     *     ServicePrincipal?: string,
     *     DelegationEnabledDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
