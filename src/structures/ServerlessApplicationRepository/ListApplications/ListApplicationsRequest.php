<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxItems
 * @property string $NextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
