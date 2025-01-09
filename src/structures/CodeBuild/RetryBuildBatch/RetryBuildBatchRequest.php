<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $idempotencyToken
 * @property 'RETRY_ALL_BUILDS'|'RETRY_FAILED_BUILDS' $retryType
 */
class RetryBuildBatchRequest extends Request
{
    /**
     * @param array{
     *     id?: string,
     *     idempotencyToken?: string,
     *     retryType?: 'RETRY_ALL_BUILDS'|'RETRY_FAILED_BUILDS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
