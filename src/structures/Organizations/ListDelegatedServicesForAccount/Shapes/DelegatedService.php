<?php

namespace Sunaoka\Aws\Structures\Organizations\ListDelegatedServicesForAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServicePrincipal
 * @property \Aws\Api\DateTimeResult|null $DelegationEnabledDate
 */
class DelegatedService extends Shape
{
    /**
     * @param array{
     *     ServicePrincipal?: string|null,
     *     DelegationEnabledDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
