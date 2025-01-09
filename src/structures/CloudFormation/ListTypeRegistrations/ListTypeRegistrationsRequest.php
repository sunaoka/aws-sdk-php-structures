<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypeRegistrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 * @property string $TypeArn
 * @property 'COMPLETE'|'IN_PROGRESS'|'FAILED' $RegistrationStatusFilter
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTypeRegistrationsRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     TypeName?: string,
     *     TypeArn?: string,
     *     RegistrationStatusFilter?: 'COMPLETE'|'IN_PROGRESS'|'FAILED',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
