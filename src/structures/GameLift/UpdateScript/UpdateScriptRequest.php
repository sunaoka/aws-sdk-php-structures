<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScriptId
 * @property string|null $Name
 * @property string|null $Version
 * @property Shapes\S3Location|null $StorageLocation
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ZipFile
 */
class UpdateScriptRequest extends Request
{
    /**
     * @param array{
     *     ScriptId: string,
     *     Name?: string|null,
     *     Version?: string|null,
     *     StorageLocation?: Shapes\S3Location|null,
     *     ZipFile?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
