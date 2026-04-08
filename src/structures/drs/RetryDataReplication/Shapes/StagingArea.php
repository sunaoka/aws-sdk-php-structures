<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXTENDED'|'EXTENSION_ERROR'|'NOT_EXTENDED'|null $status
 * @property string|null $stagingAccountID
 * @property string|null $stagingSourceServerArn
 * @property string|null $errorMessage
 */
class StagingArea extends Shape
{
    /**
     * @param array{
     *     status?: 'EXTENDED'|'EXTENSION_ERROR'|'NOT_EXTENDED'|null,
     *     stagingAccountID?: string|null,
     *     stagingSourceServerArn?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
