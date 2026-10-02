<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RemediationStringFilter>|null $StringFilters
 */
class RemediationCompositeFilter extends Shape
{
    /**
     * @param array{StringFilters?: list<RemediationStringFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
