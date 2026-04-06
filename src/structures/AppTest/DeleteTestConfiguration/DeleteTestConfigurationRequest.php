<?php

namespace Sunaoka\Aws\Structures\AppTest\DeleteTestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testConfigurationId
 */
class DeleteTestConfigurationRequest extends Request
{
    /**
     * @param array{testConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
