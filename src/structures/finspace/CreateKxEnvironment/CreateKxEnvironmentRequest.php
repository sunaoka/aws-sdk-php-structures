<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $kmsKeyId
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateKxEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     kmsKeyId: string,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
