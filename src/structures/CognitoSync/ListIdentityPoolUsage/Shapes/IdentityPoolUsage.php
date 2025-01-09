<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListIdentityPoolUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityPoolId
 * @property int $SyncSessionsCount
 * @property int $DataStorage
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class IdentityPoolUsage extends Shape
{
    /**
     * @param array{
     *     IdentityPoolId?: string,
     *     SyncSessionsCount?: int,
     *     DataStorage?: int,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
