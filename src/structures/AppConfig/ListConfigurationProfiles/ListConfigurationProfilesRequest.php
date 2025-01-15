<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListConfigurationProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Type
 */
class ListConfigurationProfilesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
