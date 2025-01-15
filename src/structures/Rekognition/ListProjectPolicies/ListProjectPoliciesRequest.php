<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListProjectPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property string|null $NextToken
 * @property int<1, 5>|null $MaxResults
 */
class ListProjectPoliciesRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 5>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
