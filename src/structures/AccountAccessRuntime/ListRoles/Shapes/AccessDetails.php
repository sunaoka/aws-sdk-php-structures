<?php

namespace Sunaoka\Aws\Structures\AccountAccessRuntime\ListRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string|null $accountName
 * @property string $roleArn
 */
class AccessDetails extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     accountName?: string|null,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
