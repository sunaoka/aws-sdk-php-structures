<?php

namespace Sunaoka\Aws\Structures\CognitoSync\DescribeIdentityUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityId
 * @property string $IdentityPoolId
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property int $DatasetCount
 * @property int $DataStorage
 */
class IdentityUsage extends Shape
{
    /**
     * @param array{
     *     IdentityId?: string,
     *     IdentityPoolId?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     DatasetCount?: int,
     *     DataStorage?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
