<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $arn
 * @property string $principalId
 */
class UserIdentityRoot extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     arn?: string,
     *     principalId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
