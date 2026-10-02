<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RemediationCompositeFilter>|null $CompositeFilters
 */
class RemediationFilters extends Shape
{
    /**
     * @param array{CompositeFilters?: list<RemediationCompositeFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
