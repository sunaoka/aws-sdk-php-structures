<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\Slot>|null $slots
 * @property list<string>|null $sampleUtterances
 * @property Shapes\Prompt|null $confirmationPrompt
 * @property Shapes\Statement|null $rejectionStatement
 * @property Shapes\FollowUpPrompt|null $followUpPrompt
 * @property Shapes\Statement|null $conclusionStatement
 * @property Shapes\CodeHook|null $dialogCodeHook
 * @property Shapes\FulfillmentActivity|null $fulfillmentActivity
 * @property string|null $parentIntentSignature
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $version
 * @property string|null $checksum
 * @property Shapes\KendraConfiguration|null $kendraConfiguration
 * @property list<Shapes\InputContext>|null $inputContexts
 * @property list<Shapes\OutputContext>|null $outputContexts
 */
class GetIntentResponse extends Response
{
}
