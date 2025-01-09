<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $intentName
 * @property string $description
 * @property string $parentIntentSignature
 * @property list<Shapes\SampleUtterance> $sampleUtterances
 * @property Shapes\DialogCodeHookSettings $dialogCodeHook
 * @property Shapes\FulfillmentCodeHookSettings $fulfillmentCodeHook
 * @property Shapes\IntentConfirmationSetting $intentConfirmationSetting
 * @property Shapes\IntentClosingSetting $intentClosingSetting
 * @property list<Shapes\InputContext> $inputContexts
 * @property list<Shapes\OutputContext> $outputContexts
 * @property Shapes\KendraConfiguration $kendraConfiguration
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\InitialResponseSetting $initialResponseSetting
 * @property Shapes\QnAIntentConfiguration $qnAIntentConfiguration
 */
class CreateIntentRequest extends Request
{
    /**
     * @param array{
     *     intentName: string,
     *     description?: string,
     *     parentIntentSignature?: string,
     *     sampleUtterances?: list<Shapes\SampleUtterance>,
     *     dialogCodeHook?: Shapes\DialogCodeHookSettings,
     *     fulfillmentCodeHook?: Shapes\FulfillmentCodeHookSettings,
     *     intentConfirmationSetting?: Shapes\IntentConfirmationSetting,
     *     intentClosingSetting?: Shapes\IntentClosingSetting,
     *     inputContexts?: list<Shapes\InputContext>,
     *     outputContexts?: list<Shapes\OutputContext>,
     *     kendraConfiguration?: Shapes\KendraConfiguration,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     initialResponseSetting?: Shapes\InitialResponseSetting,
     *     qnAIntentConfiguration?: Shapes\QnAIntentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
