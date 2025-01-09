<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property int<1, 100000> $VersionNumber
 * @property string $SectionPath
 * @property list<string> $FieldPaths
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeRegistrationFieldValuesRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     VersionNumber?: int<1, 100000>,
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
