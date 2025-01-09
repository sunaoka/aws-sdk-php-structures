<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 */
class DomainDetails extends Shape
{
    /**
     * @param array{domainName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
