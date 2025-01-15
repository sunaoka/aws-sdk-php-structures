<?php

namespace Sunaoka\Aws\Structures\RAM\DeleteResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string|null $clientToken
 */
class DeleteResourceShareRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
