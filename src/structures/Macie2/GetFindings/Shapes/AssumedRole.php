<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property string $accountId
 * @property string $arn
 * @property string $principalId
 * @property SessionContext $sessionContext
 */
class AssumedRole extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string,
     *     accountId?: string,
     *     arn?: string,
     *     principalId?: string,
     *     sessionContext?: SessionContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
