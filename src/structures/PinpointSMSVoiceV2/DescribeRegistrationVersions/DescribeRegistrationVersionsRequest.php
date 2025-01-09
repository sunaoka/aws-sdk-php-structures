<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property list<int> $VersionNumbers
 * @property list<Shapes\RegistrationVersionFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeRegistrationVersionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     VersionNumbers?: list<int>,
     *     Filters?: list<Shapes\RegistrationVersionFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
