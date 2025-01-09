<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int $MaxResults
 * @property string $PaginationToken
 */
class ListUserImportJobsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     MaxResults: int,
     *     PaginationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
