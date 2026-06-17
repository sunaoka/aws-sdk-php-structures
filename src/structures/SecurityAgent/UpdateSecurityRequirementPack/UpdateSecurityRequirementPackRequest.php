<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateSecurityRequirementPack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packId
 * @property string|null $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class UpdateSecurityRequirementPackRequest extends Request
{
    /**
     * @param array{
     *     packId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
