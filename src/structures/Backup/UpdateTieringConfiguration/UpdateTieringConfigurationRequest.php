<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateTieringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TieringConfigurationName
 * @property Shapes\TieringConfigurationInputForUpdate $TieringConfiguration
 */
class UpdateTieringConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TieringConfigurationName: string,
     *     TieringConfiguration: Shapes\TieringConfigurationInputForUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
