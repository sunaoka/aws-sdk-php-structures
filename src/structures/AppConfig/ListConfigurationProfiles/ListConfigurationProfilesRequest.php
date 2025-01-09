<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListConfigurationProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $Type
 */
class ListConfigurationProfilesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
