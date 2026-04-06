<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $awsAccountId
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null $status
 * @property string|null $awsAccountRegion
 * @property string $projectIdentifier
 * @property string|null $environmentProfileIdentifier
 * @property string|null $environmentBlueprintIdentifier
 * @property string|null $provider
 * @property string|null $name
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     awsAccountId?: string|null,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null,
     *     awsAccountRegion?: string|null,
     *     projectIdentifier: string,
     *     environmentProfileIdentifier?: string|null,
     *     environmentBlueprintIdentifier?: string|null,
     *     provider?: string|null,
     *     name?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
