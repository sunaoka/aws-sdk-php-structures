<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessKeyId
 * @property string|null $accountId
 * @property string|null $arn
 * @property string|null $principalId
 * @property SessionContext|null $sessionContext
 */
class AssumedRole extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string|null,
     *     accountId?: string|null,
     *     arn?: string|null,
     *     principalId?: string|null,
     *     sessionContext?: SessionContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
