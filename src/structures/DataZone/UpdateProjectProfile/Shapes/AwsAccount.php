<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountIdPath
 */
class AwsAccount extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     awsAccountIdPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
