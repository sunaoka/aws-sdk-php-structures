<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListEnvironmentVpcs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentIdentifier
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListEnvironmentVpcsRequest extends Request
{
    /**
     * @param array{
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
