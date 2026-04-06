<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string $domainIdentifier
 * @property string|null $environmentBlueprintIdentifier
 * @property string|null $environmentProfileIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 * @property string $projectIdentifier
 * @property string|null $provider
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null $status
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     domainIdentifier: string,
     *     environmentBlueprintIdentifier?: string|null,
     *     environmentProfileIdentifier?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     projectIdentifier: string,
     *     provider?: string|null,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
