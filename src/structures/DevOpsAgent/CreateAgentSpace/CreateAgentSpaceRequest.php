<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateAgentSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $locale
 * @property string|null $kmsKeyArn
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateAgentSpaceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     locale?: string|null,
     *     kmsKeyArn?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
