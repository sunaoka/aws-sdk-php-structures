<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\InputConfiguration $inputConfiguration
 * @property Shapes\OutputConfiguration $outputConfiguration
 * @property Shapes\DataAutomationConfiguration|null $dataAutomationConfiguration
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property Shapes\NotificationConfiguration|null $notificationConfiguration
 * @property list<Shapes\Blueprint>|null $blueprints
 */
class InvokeDataAutomationAsyncRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     inputConfiguration: Shapes\InputConfiguration,
     *     outputConfiguration: Shapes\OutputConfiguration,
     *     dataAutomationConfiguration?: Shapes\DataAutomationConfiguration|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     notificationConfiguration?: Shapes\NotificationConfiguration|null,
     *     blueprints?: list<Shapes\Blueprint>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
