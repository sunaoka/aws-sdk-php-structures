<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Description
 * @property string $DisplayName
 * @property S3Location $SourceS3Location
 * @property ScriptDetails $SetupScriptDetails
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property ScriptDetails $PostSetupScriptDetails
 * @property 'CUSTOM'|'APPSTREAM2' $PackagingType
 * @property 'INACTIVE'|'ACTIVE' $State
 * @property list<ErrorDetails> $AppBlockErrors
 */
class AppBlock extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     SourceS3Location?: S3Location,
     *     SetupScriptDetails?: ScriptDetails,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     PostSetupScriptDetails?: ScriptDetails,
     *     PackagingType?: 'CUSTOM'|'APPSTREAM2',
     *     State?: 'INACTIVE'|'ACTIVE',
     *     AppBlockErrors?: list<ErrorDetails>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
