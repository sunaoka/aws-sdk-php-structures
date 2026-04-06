<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Critical
 * @property list<ApplicationPolicy> $Policies
 */
class ApplicationPolicies extends Shape
{
    /**
     * @param array{
     *     Critical?: bool|null,
     *     Policies: list<ApplicationPolicy>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
