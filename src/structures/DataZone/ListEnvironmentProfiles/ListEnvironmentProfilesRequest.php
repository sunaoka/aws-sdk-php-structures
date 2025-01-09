<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $awsAccountId
 * @property string $awsAccountRegion
 * @property string $domainIdentifier
 * @property string $environmentBlueprintIdentifier
 * @property int<1, 50> $maxResults
 * @property string $name
 * @property string $nextToken
 * @property string $projectIdentifier
 */
class ListEnvironmentProfilesRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     awsAccountRegion?: string,
     *     domainIdentifier: string,
     *     environmentBlueprintIdentifier?: string,
     *     maxResults?: int<1, 50>,
     *     name?: string,
     *     nextToken?: string,
     *     projectIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
