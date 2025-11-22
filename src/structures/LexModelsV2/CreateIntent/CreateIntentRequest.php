<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $intentName
 * @property string|null $intentDisplayName
 * @property string|null $description
 * @property string|null $parentIntentSignature
 * @property list<Shapes\SampleUtterance>|null $sampleUtterances
 * @property Shapes\DialogCodeHookSettings|null $dialogCodeHook
 * @property Shapes\FulfillmentCodeHookSettings|null $fulfillmentCodeHook
 * @property Shapes\IntentConfirmationSetting|null $intentConfirmationSetting
 * @property Shapes\IntentClosingSetting|null $intentClosingSetting
 * @property list<Shapes\InputContext>|null $inputContexts
 * @property list<Shapes\OutputContext>|null $outputContexts
 * @property Shapes\KendraConfiguration|null $kendraConfiguration
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\InitialResponseSetting|null $initialResponseSetting
 * @property Shapes\QnAIntentConfiguration|null $qnAIntentConfiguration
 * @property Shapes\QInConnectIntentConfiguration|null $qInConnectIntentConfiguration
 */
class CreateIntentRequest extends Request
{
    /**
     * @param array{
     *     intentName: string,
     *     intentDisplayName?: string|null,
     *     description?: string|null,
     *     parentIntentSignature?: string|null,
     *     sampleUtterances?: list<Shapes\SampleUtterance>|null,
     *     dialogCodeHook?: Shapes\DialogCodeHookSettings|null,
     *     fulfillmentCodeHook?: Shapes\FulfillmentCodeHookSettings|null,
     *     intentConfirmationSetting?: Shapes\IntentConfirmationSetting|null,
     *     intentClosingSetting?: Shapes\IntentClosingSetting|null,
     *     inputContexts?: list<Shapes\InputContext>|null,
     *     outputContexts?: list<Shapes\OutputContext>|null,
     *     kendraConfiguration?: Shapes\KendraConfiguration|null,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     initialResponseSetting?: Shapes\InitialResponseSetting|null,
     *     qnAIntentConfiguration?: Shapes\QnAIntentConfiguration|null,
     *     qInConnectIntentConfiguration?: Shapes\QInConnectIntentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
