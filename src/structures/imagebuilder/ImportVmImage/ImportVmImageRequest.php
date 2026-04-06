<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportVmImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $semanticVersion
 * @property string|null $description
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property string|null $osVersion
 * @property string $vmImportTaskId
 * @property Shapes\ImageLoggingConfiguration|null $loggingConfiguration
 * @property array<string, string>|null $tags
 * @property string $clientToken
 */
class ImportVmImageRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string,
     *     description?: string|null,
     *     platform: 'Windows'|'Linux'|'macOS',
     *     osVersion?: string|null,
     *     vmImportTaskId: string,
     *     loggingConfiguration?: Shapes\ImageLoggingConfiguration|null,
     *     tags?: array<string, string>|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
