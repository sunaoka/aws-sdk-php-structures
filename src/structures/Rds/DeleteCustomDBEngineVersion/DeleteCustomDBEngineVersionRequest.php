<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteCustomDBEngineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 */
class DeleteCustomDBEngineVersionRequest extends Request
{
    /**
     * @param array{
     *     Engine: string,
     *     EngineVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
