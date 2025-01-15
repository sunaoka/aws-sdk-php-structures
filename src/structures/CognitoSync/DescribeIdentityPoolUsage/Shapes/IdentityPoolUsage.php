<?php

namespace Sunaoka\Aws\Structures\CognitoSync\DescribeIdentityPoolUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityPoolId
 * @property int|null $SyncSessionsCount
 * @property int|null $DataStorage
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class IdentityPoolUsage extends Shape
{
    /**
     * @param array{
     *     IdentityPoolId?: string|null,
     *     SyncSessionsCount?: int|null,
     *     DataStorage?: int|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
