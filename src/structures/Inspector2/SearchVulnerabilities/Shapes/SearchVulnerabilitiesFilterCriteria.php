<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $vulnerabilityIds
 */
class SearchVulnerabilitiesFilterCriteria extends Shape
{
    /**
     * @param array{vulnerabilityIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
