<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 * @property string $stagingAccountID
 * @property string $stagingSourceServerArn
 * @property 'EXTENDED'|'EXTENSION_ERROR'|'NOT_EXTENDED' $status
 */
class StagingArea extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string,
     *     stagingAccountID?: string,
     *     stagingSourceServerArn?: string,
     *     status?: 'EXTENDED'|'EXTENSION_ERROR'|'NOT_EXTENDED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
