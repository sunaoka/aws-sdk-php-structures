<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListOnPremisesInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Registered'|'Deregistered' $registrationStatus
 * @property list<Shapes\TagFilter> $tagFilters
 * @property string $nextToken
 */
class ListOnPremisesInstancesRequest extends Request
{
    /**
     * @param array{
     *     registrationStatus?: 'Registered'|'Deregistered',
     *     tagFilters?: list<Shapes\TagFilter>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
