<?php

namespace Sunaoka\Aws\Structures\Appstream\ListAssociatedStacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetName
 * @property string $NextToken
 */
class ListAssociatedStacksRequest extends Request
{
    /**
     * @param array{
     *     FleetName: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
