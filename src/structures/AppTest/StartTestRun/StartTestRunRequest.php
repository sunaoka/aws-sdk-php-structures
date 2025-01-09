<?php

namespace Sunaoka\Aws\Structures\AppTest\StartTestRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSuiteId
 * @property string $testConfigurationId
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class StartTestRunRequest extends Request
{
    /**
     * @param array{
     *     testSuiteId: string,
     *     testConfigurationId?: string,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
