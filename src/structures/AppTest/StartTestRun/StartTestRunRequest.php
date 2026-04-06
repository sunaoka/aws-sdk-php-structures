<?php

namespace Sunaoka\Aws\Structures\AppTest\StartTestRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSuiteId
 * @property string|null $testConfigurationId
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class StartTestRunRequest extends Request
{
    /**
     * @param array{
     *     testSuiteId: string,
     *     testConfigurationId?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
