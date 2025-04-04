<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $EnvironmentIdentifier
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRoutesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     EnvironmentIdentifier: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
