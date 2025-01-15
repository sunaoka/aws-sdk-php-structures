<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListTrails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListTrailsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
