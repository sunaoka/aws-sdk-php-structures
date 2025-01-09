<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCustomDBEngineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $Description
 * @property 'available'|'inactive'|'inactive-except-restore' $Status
 */
class ModifyCustomDBEngineVersionRequest extends Request
{
    /**
     * @param array{
     *     Engine: string,
     *     EngineVersion: string,
     *     Description?: string,
     *     Status?: 'available'|'inactive'|'inactive-except-restore'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
