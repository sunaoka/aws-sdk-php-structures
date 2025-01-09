<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportVmImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $semanticVersion
 * @property string $description
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property string $osVersion
 * @property string $vmImportTaskId
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class ImportVmImageRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string,
     *     description?: string,
     *     platform: 'Windows'|'Linux'|'macOS',
     *     osVersion?: string,
     *     vmImportTaskId: string,
     *     tags?: array<string, string>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
