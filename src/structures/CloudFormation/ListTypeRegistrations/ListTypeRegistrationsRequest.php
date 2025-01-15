<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypeRegistrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $TypeName
 * @property string|null $TypeArn
 * @property 'COMPLETE'|'IN_PROGRESS'|'FAILED'|null $RegistrationStatusFilter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTypeRegistrationsRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     TypeName?: string|null,
     *     TypeArn?: string|null,
     *     RegistrationStatusFilter?: 'COMPLETE'|'IN_PROGRESS'|'FAILED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
