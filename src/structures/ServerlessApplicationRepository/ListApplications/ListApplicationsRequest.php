<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxItems
 * @property string|null $NextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
