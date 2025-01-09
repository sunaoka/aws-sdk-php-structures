<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $awsAccountId
 * @property string $awsAccountRegion
 * @property string $domainIdentifier
 * @property string $environmentBlueprintIdentifier
 * @property string $environmentProfileIdentifier
 * @property int<1, 50> $maxResults
 * @property string $name
 * @property string $nextToken
 * @property string $projectIdentifier
 * @property string $provider
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE' $status
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     awsAccountRegion?: string,
     *     domainIdentifier: string,
     *     environmentBlueprintIdentifier?: string,
     *     environmentProfileIdentifier?: string,
     *     maxResults?: int<1, 50>,
     *     name?: string,
     *     nextToken?: string,
     *     projectIdentifier: string,
     *     provider?: string,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
