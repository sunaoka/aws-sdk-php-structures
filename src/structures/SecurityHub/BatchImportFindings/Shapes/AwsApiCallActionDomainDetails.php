<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 */
class AwsApiCallActionDomainDetails extends Shape
{
    /**
     * @param array{Domain?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
