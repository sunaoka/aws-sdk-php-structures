<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RegistrationIds
 * @property list<Shapes\RegistrationFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeRegistrationsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationIds?: list<string>|null,
     *     Filters?: list<Shapes\RegistrationFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
