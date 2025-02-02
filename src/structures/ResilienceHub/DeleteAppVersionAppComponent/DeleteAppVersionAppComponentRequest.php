<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppVersionAppComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string|null $clientToken
 * @property string $id
 */
class DeleteAppVersionAppComponentRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     clientToken?: string|null,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
