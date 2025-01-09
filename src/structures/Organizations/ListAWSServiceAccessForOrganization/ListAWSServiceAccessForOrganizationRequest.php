<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAWSServiceAccessForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListAWSServiceAccessForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
