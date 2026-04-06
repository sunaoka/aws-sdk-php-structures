<?php

namespace Sunaoka\Aws\Structures\Backup\GetTieringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TieringConfigurationName
 */
class GetTieringConfigurationRequest extends Request
{
    /**
     * @param array{TieringConfigurationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
