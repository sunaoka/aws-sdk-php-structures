<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $semanticVersion
 * @property string $description
 * @property string $changeDescription
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property list<string> $supportedOsVersions
 * @property string $data
 * @property string $uri
 * @property string $kmsKeyId
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateComponentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string,
     *     description?: string,
     *     changeDescription?: string,
     *     platform: 'Windows'|'Linux'|'macOS',
     *     supportedOsVersions?: list<string>,
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
