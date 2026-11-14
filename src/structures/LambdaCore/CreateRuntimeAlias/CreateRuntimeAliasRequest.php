<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateRuntimeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string $RuntimeVersion
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\RuntimeReleaseLifecycle|null $ReleaseLifecycle
 */
class CreateRuntimeAliasRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     RuntimeVersion: string,
     *     Name: string,
     *     Description?: string|null,
     *     ReleaseLifecycle?: Shapes\RuntimeReleaseLifecycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
