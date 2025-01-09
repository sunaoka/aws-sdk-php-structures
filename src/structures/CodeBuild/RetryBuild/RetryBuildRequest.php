<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $idempotencyToken
 */
class RetryBuildRequest extends Request
{
    /**
     * @param array{
     *     id?: string,
     *     idempotencyToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
