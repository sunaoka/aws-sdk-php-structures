<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property Shapes\S3Location $SourceS3Location
 * @property Shapes\ScriptDetails|null $SetupScriptDetails
 * @property array<string, string>|null $Tags
 * @property Shapes\ScriptDetails|null $PostSetupScriptDetails
 * @property 'CUSTOM'|'APPSTREAM2'|null $PackagingType
 */
class CreateAppBlockRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     SourceS3Location: Shapes\S3Location,
     *     SetupScriptDetails?: Shapes\ScriptDetails|null,
     *     Tags?: array<string, string>|null,
     *     PostSetupScriptDetails?: Shapes\ScriptDetails|null,
     *     PackagingType?: 'CUSTOM'|'APPSTREAM2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
