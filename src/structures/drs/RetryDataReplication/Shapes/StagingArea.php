<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorMessage
 * @property string|null $stagingAccountID
 * @property string|null $stagingSourceServerArn
 * @property 'EXTENDED'|'EXTENSION_ERROR'|'NOT_EXTENDED'|null $status
 */
class StagingArea extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string|null,
     *     stagingAccountID?: string|null,
     *     stagingSourceServerArn?: string|null,
     *     status?: 'EXTENDED'|'EXTENSION_ERROR'|'NOT_EXTENDED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
