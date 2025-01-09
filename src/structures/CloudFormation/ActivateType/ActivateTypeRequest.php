<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ActivateType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $PublicTypeArn
 * @property string $PublisherId
 * @property string $TypeName
 * @property string $TypeNameAlias
 * @property bool $AutoUpdate
 * @property Shapes\LoggingConfig $LoggingConfig
 * @property string $ExecutionRoleArn
 * @property 'MAJOR'|'MINOR' $VersionBump
 * @property int $MajorVersion
 */
class ActivateTypeRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     PublicTypeArn?: string,
     *     PublisherId?: string,
     *     TypeName?: string,
     *     TypeNameAlias?: string,
     *     AutoUpdate?: bool,
     *     LoggingConfig?: Shapes\LoggingConfig,
     *     ExecutionRoleArn?: string,
     *     VersionBump?: 'MAJOR'|'MINOR',
     *     MajorVersion?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
