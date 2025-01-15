<?php

namespace Sunaoka\Aws\Structures\XRay\GetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class GetGroupsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
