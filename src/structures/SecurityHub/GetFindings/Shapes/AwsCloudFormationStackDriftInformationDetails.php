<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackDriftStatus
 */
class AwsCloudFormationStackDriftInformationDetails extends Shape
{
    /**
     * @param array{StackDriftStatus?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
