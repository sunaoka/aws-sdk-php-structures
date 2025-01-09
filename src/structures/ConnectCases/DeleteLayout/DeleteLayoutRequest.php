<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $layoutId
 */
class DeleteLayoutRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     layoutId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
