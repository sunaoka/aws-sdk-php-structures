<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTableAutoScalingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property string $tableName
 */
class GetTableAutoScalingSettingsRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     tableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
