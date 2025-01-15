<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListOnPremisesInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Registered'|'Deregistered'|null $registrationStatus
 * @property list<Shapes\TagFilter>|null $tagFilters
 * @property string|null $nextToken
 */
class ListOnPremisesInstancesRequest extends Request
{
    /**
     * @param array{
     *     registrationStatus?: 'Registered'|'Deregistered'|null,
     *     tagFilters?: list<Shapes\TagFilter>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
