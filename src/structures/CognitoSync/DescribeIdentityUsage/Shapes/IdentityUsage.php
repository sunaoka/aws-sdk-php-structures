<?php

namespace Sunaoka\Aws\Structures\CognitoSync\DescribeIdentityUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityId
 * @property string|null $IdentityPoolId
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property int|null $DatasetCount
 * @property int|null $DataStorage
 */
class IdentityUsage extends Shape
{
    /**
     * @param array{
     *     IdentityId?: string|null,
     *     IdentityPoolId?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     DatasetCount?: int|null,
     *     DataStorage?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
