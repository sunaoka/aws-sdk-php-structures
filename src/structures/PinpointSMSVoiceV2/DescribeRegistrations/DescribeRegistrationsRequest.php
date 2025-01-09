<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RegistrationIds
 * @property list<Shapes\RegistrationFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeRegistrationsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationIds?: list<string>,
     *     Filters?: list<Shapes\RegistrationFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
