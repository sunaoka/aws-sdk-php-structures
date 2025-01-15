<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypeVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $TypeName
 * @property string|null $VersionId
 * @property bool|null $IsDefaultVersion
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $TimeCreated
 * @property string|null $Description
 * @property string|null $PublicVersionNumber
 */
class TypeVersionSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     TypeName?: string|null,
     *     VersionId?: string|null,
     *     IsDefaultVersion?: bool|null,
     *     Arn?: string|null,
     *     TimeCreated?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     PublicVersionNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
