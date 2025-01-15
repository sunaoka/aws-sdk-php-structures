<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ActivateType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $PublicTypeArn
 * @property string|null $PublisherId
 * @property string|null $TypeName
 * @property string|null $TypeNameAlias
 * @property bool|null $AutoUpdate
 * @property Shapes\LoggingConfig|null $LoggingConfig
 * @property string|null $ExecutionRoleArn
 * @property 'MAJOR'|'MINOR'|null $VersionBump
 * @property int<1, 100000>|null $MajorVersion
 */
class ActivateTypeRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     PublicTypeArn?: string|null,
     *     PublisherId?: string|null,
     *     TypeName?: string|null,
     *     TypeNameAlias?: string|null,
     *     AutoUpdate?: bool|null,
     *     LoggingConfig?: Shapes\LoggingConfig|null,
     *     ExecutionRoleArn?: string|null,
     *     VersionBump?: 'MAJOR'|'MINOR'|null,
     *     MajorVersion?: int<1, 100000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
