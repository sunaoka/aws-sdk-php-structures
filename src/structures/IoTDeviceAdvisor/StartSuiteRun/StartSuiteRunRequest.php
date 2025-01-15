<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\StartSuiteRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $suiteDefinitionId
 * @property string|null $suiteDefinitionVersion
 * @property Shapes\SuiteRunConfiguration $suiteRunConfiguration
 * @property array<string, string>|null $tags
 */
class StartSuiteRunRequest extends Request
{
    /**
     * @param array{
     *     suiteDefinitionId: string,
     *     suiteDefinitionVersion?: string|null,
     *     suiteRunConfiguration: Shapes\SuiteRunConfiguration,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
