<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent;

use Sunaoka\Aws\Structures\Request;

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
 * @property string $checksum
 * @property bool $createVersion
 * @property Shapes\KendraConfiguration $kendraConfiguration
 * @property list<Shapes\InputContext> $inputContexts
 * @property list<Shapes\OutputContext> $outputContexts
 */
class PutIntentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     slots?: list<Shapes\Slot>,
     *     sampleUtterances?: list<string>,
     *     confirmationPrompt?: Shapes\Prompt,
     *     rejectionStatement?: Shapes\Statement,
     *     followUpPrompt?: Shapes\FollowUpPrompt,
     *     conclusionStatement?: Shapes\Statement,
     *     dialogCodeHook?: Shapes\CodeHook,
     *     fulfillmentActivity?: Shapes\FulfillmentActivity,
     *     parentIntentSignature?: string,
     *     checksum?: string,
     *     createVersion?: bool,
     *     kendraConfiguration?: Shapes\KendraConfiguration,
     *     inputContexts?: list<Shapes\InputContext>,
     *     outputContexts?: list<Shapes\OutputContext>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
