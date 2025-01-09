<?php

namespace Sunaoka\Aws\Structures\Emr\ListBootstrapActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $Marker
 */
class ListBootstrapActionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
