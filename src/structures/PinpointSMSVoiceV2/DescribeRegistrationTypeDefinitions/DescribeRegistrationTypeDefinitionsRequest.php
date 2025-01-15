<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationTypeDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RegistrationTypes
 * @property list<Shapes\RegistrationTypeFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeRegistrationTypeDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationTypes?: list<string>|null,
     *     Filters?: list<Shapes\RegistrationTypeFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
