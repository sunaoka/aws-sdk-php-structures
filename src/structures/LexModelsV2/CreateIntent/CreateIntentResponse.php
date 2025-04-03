<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $intentId
 * @property string|null $intentName
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
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property Shapes\InitialResponseSetting|null $initialResponseSetting
 * @property Shapes\QnAIntentConfiguration|null $qnAIntentConfiguration
 * @property Shapes\QInConnectIntentConfiguration|null $qInConnectIntentConfiguration
 */
class CreateIntentResponse extends Response
{
}
