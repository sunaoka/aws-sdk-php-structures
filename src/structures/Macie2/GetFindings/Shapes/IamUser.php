<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $arn
 * @property string $principalId
 * @property string $userName
 */
class IamUser extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     arn?: string,
     *     principalId?: string,
     *     userName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
