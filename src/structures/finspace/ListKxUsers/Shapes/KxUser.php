<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userArn
 * @property string|null $userName
 * @property string|null $iamRole
 * @property \Aws\Api\DateTimeResult|null $createTimestamp
 * @property \Aws\Api\DateTimeResult|null $updateTimestamp
 */
class KxUser extends Shape
{
    /**
     * @param array{
     *     userArn?: string|null,
     *     userName?: string|null,
     *     iamRole?: string|null,
     *     createTimestamp?: \Aws\Api\DateTimeResult|null,
     *     updateTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
