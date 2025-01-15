<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $id
 * @property string|null $idempotencyToken
 */
class RetryBuildRequest extends Request
{
    /**
     * @param array{
     *     id?: string|null,
     *     idempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
