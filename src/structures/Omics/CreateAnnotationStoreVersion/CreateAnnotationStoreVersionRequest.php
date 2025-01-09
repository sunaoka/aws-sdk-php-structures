<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStoreVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $versionName
 * @property string $description
 * @property Shapes\VersionOptions $versionOptions
 * @property array<string, string> $tags
 */
class CreateAnnotationStoreVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     versionName: string,
     *     description?: string,
     *     versionOptions?: Shapes\VersionOptions,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
