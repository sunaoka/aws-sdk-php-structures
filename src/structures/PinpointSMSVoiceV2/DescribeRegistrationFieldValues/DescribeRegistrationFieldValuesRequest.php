<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property int $VersionNumber
 * @property string $SectionPath
 * @property list<string> $FieldPaths
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeRegistrationFieldValuesRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     VersionNumber?: int,
     *     SectionPath?: string,
     *     FieldPaths?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
