<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userArn
 * @property string $userName
 * @property string $iamRole
 * @property \Aws\Api\DateTimeResult $createTimestamp
 * @property \Aws\Api\DateTimeResult $updateTimestamp
 */
class KxUser extends Shape
{
    /**
     * @param array{
     *     userArn?: string,
     *     userName?: string,
     *     iamRole?: string,
     *     createTimestamp?: \Aws\Api\DateTimeResult,
     *     updateTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
