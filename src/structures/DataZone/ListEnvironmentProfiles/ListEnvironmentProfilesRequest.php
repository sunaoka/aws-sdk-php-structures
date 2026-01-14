<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string|null $environmentBlueprintIdentifier
 * @property string|null $projectIdentifier
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListEnvironmentProfilesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     environmentBlueprintIdentifier?: string|null,
     *     projectIdentifier?: string|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
