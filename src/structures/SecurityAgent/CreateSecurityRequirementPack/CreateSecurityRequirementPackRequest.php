<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateSecurityRequirementPack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 */
class CreateSecurityRequirementPackRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     status?: 'ENABLED'|'DISABLED'|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
