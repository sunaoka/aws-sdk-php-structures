<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $semanticVersion
 * @property string|null $description
 * @property string|null $changeDescription
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property list<string>|null $supportedOsVersions
 * @property string|null $data
 * @property string|null $uri
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property string $clientToken
 */
class CreateComponentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string,
     *     description?: string|null,
     *     changeDescription?: string|null,
     *     platform: 'Windows'|'Linux'|'macOS',
     *     supportedOsVersions?: list<string>|null,
     *     data?: string|null,
     *     uri?: string|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
