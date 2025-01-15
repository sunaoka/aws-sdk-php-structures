<?php

namespace Sunaoka\Aws\Structures\Omics\CreateAnnotationStoreVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $versionName
 * @property string|null $description
 * @property Shapes\VersionOptions|null $versionOptions
 * @property array<string, string>|null $tags
 */
class CreateAnnotationStoreVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     versionName: string,
     *     description?: string|null,
     *     versionOptions?: Shapes\VersionOptions|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
