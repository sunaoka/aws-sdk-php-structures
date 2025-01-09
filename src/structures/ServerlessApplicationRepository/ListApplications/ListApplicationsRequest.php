<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxItems
 * @property string $NextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
