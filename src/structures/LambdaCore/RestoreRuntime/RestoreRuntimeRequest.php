<?php

namespace Sunaoka\Aws\Structures\LambdaCore\RestoreRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string|null $RuntimeVersion
 * @property string|null $RuntimeAlias
 */
class RestoreRuntimeRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     RuntimeVersion?: string|null,
     *     RuntimeAlias?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
