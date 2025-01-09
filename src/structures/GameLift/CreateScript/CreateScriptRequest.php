<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Version
 * @property Shapes\S3Location $StorageLocation
 * @property string $ZipFile
 * @property list<Shapes\Tag> $Tags
 */
class CreateScriptRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     Version?: string,
     *     StorageLocation?: Shapes\S3Location,
     *     ZipFile?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
