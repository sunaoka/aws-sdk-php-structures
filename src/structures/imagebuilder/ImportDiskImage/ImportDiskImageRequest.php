<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportDiskImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $semanticVersion
 * @property string|null $description
 * @property string $platform
 * @property string $osVersion
 * @property string|null $executionRole
 * @property string $infrastructureConfigurationArn
 * @property string $uri
 * @property array<string, string>|null $tags
 * @property string $clientToken
 */
class ImportDiskImageRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string,
     *     description?: string|null,
     *     platform: string,
     *     osVersion: string,
     *     executionRole?: string|null,
     *     infrastructureConfigurationArn: string,
     *     uri: string,
     *     tags?: array<string, string>|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
