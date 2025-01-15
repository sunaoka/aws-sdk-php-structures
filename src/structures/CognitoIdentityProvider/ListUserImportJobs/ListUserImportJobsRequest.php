<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int<1, 60> $MaxResults
 * @property string|null $PaginationToken
 */
class ListUserImportJobsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     MaxResults: int<1, 60>,
     *     PaginationToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
