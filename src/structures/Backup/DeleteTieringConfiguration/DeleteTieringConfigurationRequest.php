<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteTieringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TieringConfigurationName
 */
class DeleteTieringConfigurationRequest extends Request
{
    /**
     * @param array{TieringConfigurationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
