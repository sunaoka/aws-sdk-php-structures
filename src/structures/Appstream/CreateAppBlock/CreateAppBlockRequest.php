<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $DisplayName
 * @property Shapes\S3Location $SourceS3Location
 * @property Shapes\ScriptDetails $SetupScriptDetails
 * @property array<string, string> $Tags
 * @property Shapes\ScriptDetails $PostSetupScriptDetails
 * @property 'CUSTOM'|'APPSTREAM2' $PackagingType
 */
class CreateAppBlockRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     SourceS3Location: Shapes\S3Location,
     *     SetupScriptDetails?: Shapes\ScriptDetails,
     *     Tags?: array<string, string>,
     *     PostSetupScriptDetails?: Shapes\ScriptDetails,
     *     PackagingType?: 'CUSTOM'|'APPSTREAM2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
