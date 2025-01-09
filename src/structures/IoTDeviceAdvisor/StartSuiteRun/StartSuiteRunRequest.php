<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\StartSuiteRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string $suiteDefinitionVersion
 * @property Shapes\SuiteRunConfiguration $suiteRunConfiguration
 * @property array<string, string> $tags
 */
class StartSuiteRunRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId: string,
     *     suiteDefinitionVersion?: string,
     *     suiteRunConfiguration: Shapes\SuiteRunConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
