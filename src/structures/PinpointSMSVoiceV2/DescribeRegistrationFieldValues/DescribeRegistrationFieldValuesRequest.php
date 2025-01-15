<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property int<1, 100000>|null $VersionNumber
 * @property string|null $SectionPath
 * @property list<string>|null $FieldPaths
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeRegistrationFieldValuesRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     VersionNumber?: int<1, 100000>|null,
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
