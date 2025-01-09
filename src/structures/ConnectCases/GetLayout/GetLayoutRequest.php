<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $layoutId
 */
class GetLayoutRequest extends Request
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
