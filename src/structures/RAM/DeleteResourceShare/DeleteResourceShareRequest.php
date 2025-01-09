<?php

namespace Sunaoka\Aws\Structures\RAM\DeleteResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string $clientToken
 */
class DeleteResourceShareRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
