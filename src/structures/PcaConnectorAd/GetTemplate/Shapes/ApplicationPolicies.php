<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Critical
 * @property list<ApplicationPolicy> $Policies
 */
class ApplicationPolicies extends Shape
{
    /**
     * @param array{
     *     Critical?: bool,
     *     Policies: list<ApplicationPolicy>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
