<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationSectionDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationType
 * @property list<string> $SectionPaths
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeRegistrationSectionDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationType: string,
     *     SectionPaths?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
