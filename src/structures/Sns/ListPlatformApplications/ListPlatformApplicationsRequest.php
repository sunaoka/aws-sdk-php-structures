<?php

namespace Sunaoka\Aws\Structures\Sns\ListPlatformApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListPlatformApplicationsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
