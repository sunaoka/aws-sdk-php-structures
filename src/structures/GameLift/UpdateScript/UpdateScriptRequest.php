<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScriptId
 * @property string $Name
 * @property string $Version
 * @property Shapes\S3Location $StorageLocation
 * @property string $ZipFile
 */
class UpdateScriptRequest extends Request
{
    /**
     * @param array{
     *     ScriptId: string,
     *     Name?: string,
     *     Version?: string,
     *     StorageLocation?: Shapes\S3Location,
     *     ZipFile?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
