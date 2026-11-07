<?php

namespace Sunaoka\Aws\Structures\Athena\GetSystemTableConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL' $TableName
 */
class GetSystemTableConfigurationRequest extends Request
{
    /**
     * @param array{TableName: 'ALL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
