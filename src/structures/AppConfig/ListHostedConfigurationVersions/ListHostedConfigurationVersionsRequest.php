<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListHostedConfigurationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $VersionLabel
 */
class ListHostedConfigurationVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     VersionLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
