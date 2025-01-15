<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCustomDBEngineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string|null $Description
 * @property 'available'|'inactive'|'inactive-except-restore'|null $Status
 */
class ModifyCustomDBEngineVersionRequest extends Request
{
    /**
     * @param array{
     *     Engine: string,
     *     EngineVersion: string,
     *     Description?: string|null,
     *     Status?: 'available'|'inactive'|'inactive-except-restore'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
