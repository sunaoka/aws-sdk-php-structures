<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteSystemTableConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL' $TableName
 */
class DeleteSystemTableConfigurationRequest extends Request
{
    /**
     * @param array{TableName: 'ALL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
