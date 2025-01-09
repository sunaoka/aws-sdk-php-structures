<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentIdentifier
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentIdentifier: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
