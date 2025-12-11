<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SyncInputConfiguration $inputConfiguration
 * @property Shapes\DataAutomationConfiguration|null $dataAutomationConfiguration
 * @property list<Shapes\Blueprint>|null $blueprints
 * @property string $dataAutomationProfileArn
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class InvokeDataAutomationRequest extends Request
{
    /**
     * @param array{
     *     inputConfiguration: Shapes\SyncInputConfiguration,
     *     dataAutomationConfiguration?: Shapes\DataAutomationConfiguration|null,
     *     blueprints?: list<Shapes\Blueprint>|null,
     *     dataAutomationProfileArn: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
