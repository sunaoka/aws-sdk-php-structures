<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListProjectPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListProjectPoliciesRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
