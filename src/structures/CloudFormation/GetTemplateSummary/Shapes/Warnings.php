<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $UnrecognizedResourceTypes
 */
class Warnings extends Shape
{
    /**
     * @param array{UnrecognizedResourceTypes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
