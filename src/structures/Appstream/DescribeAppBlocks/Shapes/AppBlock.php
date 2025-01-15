<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property S3Location|null $SourceS3Location
 * @property ScriptDetails|null $SetupScriptDetails
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property ScriptDetails|null $PostSetupScriptDetails
 * @property 'CUSTOM'|'APPSTREAM2'|null $PackagingType
 * @property 'INACTIVE'|'ACTIVE'|null $State
 * @property list<ErrorDetails>|null $AppBlockErrors
 */
class AppBlock extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     SourceS3Location?: S3Location|null,
     *     SetupScriptDetails?: ScriptDetails|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     PostSetupScriptDetails?: ScriptDetails|null,
     *     PackagingType?: 'CUSTOM'|'APPSTREAM2'|null,
     *     State?: 'INACTIVE'|'ACTIVE'|null,
     *     AppBlockErrors?: list<ErrorDetails>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
