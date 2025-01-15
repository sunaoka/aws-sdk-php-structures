<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testConfigurationId
 * @property int|null $testConfigurationVersion
 */
class GetTestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     testConfigurationId: string,
     *     testConfigurationVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
