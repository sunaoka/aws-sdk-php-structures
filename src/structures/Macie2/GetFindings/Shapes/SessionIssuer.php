<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $arn
 * @property string|null $principalId
 * @property string|null $type
 * @property string|null $userName
 */
class SessionIssuer extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     arn?: string|null,
     *     principalId?: string|null,
     *     type?: string|null,
     *     userName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
