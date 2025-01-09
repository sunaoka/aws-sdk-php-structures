<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $clientToken
 * @property bool $forceDelete
 */
class DeleteAppRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     clientToken?: string,
     *     forceDelete?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
