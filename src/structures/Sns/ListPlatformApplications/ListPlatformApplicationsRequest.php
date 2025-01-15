<?php

namespace Sunaoka\Aws\Structures\Sns\ListPlatformApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListPlatformApplicationsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
