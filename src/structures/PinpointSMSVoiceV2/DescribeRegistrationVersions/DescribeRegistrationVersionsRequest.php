<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property list<int<1, 100000>> $VersionNumbers
 * @property list<Shapes\RegistrationVersionFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeRegistrationVersionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     VersionNumbers?: list<int<1, 100000>>,
     *     Filters?: list<Shapes\RegistrationVersionFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
