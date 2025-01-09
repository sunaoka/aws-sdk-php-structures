<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateUrl
 */
class CloudFormationProperties extends Shape
{
    /**
     * @param array{templateUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
