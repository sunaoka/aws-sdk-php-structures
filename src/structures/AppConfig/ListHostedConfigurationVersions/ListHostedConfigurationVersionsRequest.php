<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListHostedConfigurationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $VersionLabel
 */
class ListHostedConfigurationVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     VersionLabel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
