<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\InputConfiguration $inputConfiguration
 * @property Shapes\OutputConfiguration $outputConfiguration
 * @property Shapes\DataAutomationConfiguration $dataAutomationConfiguration
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 * @property Shapes\NotificationConfiguration $notificationConfiguration
 * @property list<Shapes\Blueprint> $blueprints
 */
class InvokeDataAutomationAsyncRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     inputConfiguration: Shapes\InputConfiguration,
     *     outputConfiguration: Shapes\OutputConfiguration,
     *     dataAutomationConfiguration?: Shapes\DataAutomationConfiguration,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration,
     *     notificationConfiguration?: Shapes\NotificationConfiguration,
     *     blueprints?: list<Shapes\Blueprint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
