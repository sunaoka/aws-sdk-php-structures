<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $semanticVersion
 * @property string $description
 * @property string $changeDescription
 * @property 'BUILD'|'TEST' $type
 * @property 'SHELL' $format
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property string $data
 * @property string $uri
 * @property string $kmsKeyId
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class ImportComponentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string,
     *     description?: string,
     *     changeDescription?: string,
     *     type: 'BUILD'|'TEST',
     *     format: 'SHELL',
     *     platform: 'Windows'|'Linux'|'macOS',
     *     data?: string,
     *     uri?: string,
     *     kmsKeyId?: string,
     *     tags?: array<string, string>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
