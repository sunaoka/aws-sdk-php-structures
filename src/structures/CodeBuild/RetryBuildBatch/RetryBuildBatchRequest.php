<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $id
 * @property string|null $idempotencyToken
 * @property 'RETRY_ALL_BUILDS'|'RETRY_FAILED_BUILDS'|null $retryType
 */
class RetryBuildBatchRequest extends Request
{
    /**
     * @param array{
     *     id?: string|null,
     *     idempotencyToken?: string|null,
     *     retryType?: 'RETRY_ALL_BUILDS'|'RETRY_FAILED_BUILDS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
