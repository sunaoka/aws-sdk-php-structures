<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationSectionDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationType
 * @property list<string>|null $SectionPaths
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeRegistrationSectionDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationType: string,
     *     SectionPaths?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
