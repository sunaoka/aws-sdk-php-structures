<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypeVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 * @property string $VersionId
 * @property bool $IsDefaultVersion
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $TimeCreated
 * @property string $Description
 * @property string $PublicVersionNumber
 */
class TypeVersionSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     TypeName?: string,
     *     VersionId?: string,
     *     IsDefaultVersion?: bool,
     *     Arn?: string,
     *     TimeCreated?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     PublicVersionNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
