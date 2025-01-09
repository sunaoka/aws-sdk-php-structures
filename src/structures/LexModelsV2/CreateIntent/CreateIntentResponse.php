<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $intentId
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
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property Shapes\InitialResponseSetting $initialResponseSetting
 * @property Shapes\QnAIntentConfiguration $qnAIntentConfiguration
 */
class CreateIntentResponse extends Response
{
}
