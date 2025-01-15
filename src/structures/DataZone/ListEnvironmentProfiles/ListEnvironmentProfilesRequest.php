<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string $domainIdentifier
 * @property string|null $environmentBlueprintIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 * @property string|null $projectIdentifier
 */
class ListEnvironmentProfilesRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     domainIdentifier: string,
     *     environmentBlueprintIdentifier?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     projectIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
