<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListEnvironmentVpcs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentIdentifier
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEnvironmentVpcsRequest extends Request
{
    /**
     * @param array{
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
