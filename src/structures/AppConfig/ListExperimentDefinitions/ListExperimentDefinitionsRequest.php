<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationIdentifier
 * @property string|null $ConfigurationProfileIdentifier
 * @property string|null $EnvironmentIdentifier
 * @property 'ACTIVE'|'IDLE'|'ARCHIVED'|null $Status
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExperimentDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier?: string|null,
     *     ConfigurationProfileIdentifier?: string|null,
     *     EnvironmentIdentifier?: string|null,
     *     Status?: 'ACTIVE'|'IDLE'|'ARCHIVED'|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
