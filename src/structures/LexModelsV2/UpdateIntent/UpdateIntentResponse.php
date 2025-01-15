<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $intentId
 * @property string|null $intentName
 * @property string|null $description
 * @property string|null $parentIntentSignature
 * @property list<Shapes\SampleUtterance>|null $sampleUtterances
 * @property Shapes\DialogCodeHookSettings|null $dialogCodeHook
 * @property Shapes\FulfillmentCodeHookSettings|null $fulfillmentCodeHook
 * @property list<Shapes\SlotPriority>|null $slotPriorities
 * @property Shapes\IntentConfirmationSetting|null $intentConfirmationSetting
 * @property Shapes\IntentClosingSetting|null $intentClosingSetting
 * @property list<Shapes\InputContext>|null $inputContexts
 * @property list<Shapes\OutputContext>|null $outputContexts
 * @property Shapes\KendraConfiguration|null $kendraConfiguration
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property Shapes\InitialResponseSetting|null $initialResponseSetting
 * @property Shapes\QnAIntentConfiguration|null $qnAIntentConfiguration
 */
class UpdateIntentResponse extends Response
{
}
