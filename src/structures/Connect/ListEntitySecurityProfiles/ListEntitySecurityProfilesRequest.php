<?php

namespace Sunaoka\Aws\Structures\Connect\ListEntitySecurityProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'USER'|'AI_AGENT' $EntityType
 * @property string $EntityArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListEntitySecurityProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EntityType: 'USER'|'AI_AGENT',
     *     EntityArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
