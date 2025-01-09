<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $EnvironmentIdentifier
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListRoutesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     EnvironmentIdentifier: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
