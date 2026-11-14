<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntimeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string $Name
 * @property string $RuntimeVersion
 * @property string|null $Description
 * @property Shapes\RuntimeReleaseLifecycle|null $ReleaseLifecycle
 */
class UpdateRuntimeAliasRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     Name: string,
     *     RuntimeVersion: string,
     *     Description?: string|null,
     *     ReleaseLifecycle?: Shapes\RuntimeReleaseLifecycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
