<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Slot> $slots
 * @property list<string> $sampleUtterances
 * @property Shapes\Prompt $confirmationPrompt
 * @property Shapes\Statement $rejectionStatement
 * @property Shapes\FollowUpPrompt $followUpPrompt
 * @property Shapes\Statement $conclusionStatement
 * @property Shapes\CodeHook $dialogCodeHook
 * @property Shapes\FulfillmentActivity $fulfillmentActivity
 * @property string $parentIntentSignature
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property string $version
 * @property string $checksum
 * @property Shapes\KendraConfiguration $kendraConfiguration
 * @property list<Shapes\InputContext> $inputContexts
 * @property list<Shapes\OutputContext> $outputContexts
 */
class GetIntentResponse extends Response
{
}
