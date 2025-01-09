<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string $awsAccountIdPath
 */
class AwsAccount extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     awsAccountIdPath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
