<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $arn
 * @property string|null $principalId
 */
class UserIdentityRoot extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     arn?: string|null,
     *     principalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
