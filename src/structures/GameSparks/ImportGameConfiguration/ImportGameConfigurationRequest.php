<?php

namespace Sunaoka\Aws\Structures\GameSparks\ImportGameConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property Shapes\ImportGameConfigurationSource $ImportSource
 */
class ImportGameConfigurationRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     ImportSource: Shapes\ImportGameConfigurationSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
