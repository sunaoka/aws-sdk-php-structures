<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property list<int<1, 100000>>|null $VersionNumbers
 * @property list<Shapes\RegistrationVersionFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeRegistrationVersionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     VersionNumbers?: list<int<1, 100000>>|null,
     *     Filters?: list<Shapes\RegistrationVersionFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
