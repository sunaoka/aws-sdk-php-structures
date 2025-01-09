<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $kmsKeyId
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateKxEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     kmsKeyId: string,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
