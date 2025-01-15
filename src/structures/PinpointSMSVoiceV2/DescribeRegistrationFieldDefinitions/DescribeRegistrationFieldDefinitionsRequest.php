<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationType
 * @property string|null $SectionPath
 * @property list<string>|null $FieldPaths
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeRegistrationFieldDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationType: string,
     *     SectionPath?: string|null,
     *     FieldPaths?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
