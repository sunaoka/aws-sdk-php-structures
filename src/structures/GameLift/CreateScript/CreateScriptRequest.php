<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Version
 * @property Shapes\S3Location|null $StorageLocation
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ZipFile
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $NodeJsVersion
 */
class CreateScriptRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Version?: string|null,
     *     StorageLocation?: Shapes\S3Location|null,
     *     ZipFile?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     NodeJsVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
