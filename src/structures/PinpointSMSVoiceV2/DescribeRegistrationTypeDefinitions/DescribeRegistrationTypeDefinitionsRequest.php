<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationTypeDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RegistrationTypes
 * @property list<Shapes\RegistrationTypeFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeRegistrationTypeDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationTypes?: list<string>,
     *     Filters?: list<Shapes\RegistrationTypeFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
