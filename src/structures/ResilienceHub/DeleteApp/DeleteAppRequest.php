<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string|null $clientToken
 * @property bool|null $forceDelete
 */
class DeleteAppRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     clientToken?: string|null,
     *     forceDelete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
