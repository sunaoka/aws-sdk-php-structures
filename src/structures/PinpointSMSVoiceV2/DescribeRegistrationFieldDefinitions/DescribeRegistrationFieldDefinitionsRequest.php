<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationType
 * @property string $SectionPath
 * @property list<string> $FieldPaths
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeRegistrationFieldDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationType: string,
     *     SectionPath?: string,
     *     FieldPaths?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
