<?php

namespace Sunaoka\Aws\Structures\Appstream\ListAssociatedFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $NextToken
 */
class ListAssociatedFleetsRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
