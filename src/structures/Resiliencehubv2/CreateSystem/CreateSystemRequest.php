<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property bool|null $sharingEnabled
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateSystemRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     sharingEnabled?: bool|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
