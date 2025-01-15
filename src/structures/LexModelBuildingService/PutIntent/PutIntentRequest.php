<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
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
 * @property string|null $checksum
 * @property bool|null $createVersion
 * @property Shapes\KendraConfiguration|null $kendraConfiguration
 * @property list<Shapes\InputContext>|null $inputContexts
 * @property list<Shapes\OutputContext>|null $outputContexts
 */
class PutIntentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     slots?: list<Shapes\Slot>|null,
     *     sampleUtterances?: list<string>|null,
     *     confirmationPrompt?: Shapes\Prompt|null,
     *     rejectionStatement?: Shapes\Statement|null,
     *     followUpPrompt?: Shapes\FollowUpPrompt|null,
     *     conclusionStatement?: Shapes\Statement|null,
     *     dialogCodeHook?: Shapes\CodeHook|null,
     *     fulfillmentActivity?: Shapes\FulfillmentActivity|null,
     *     parentIntentSignature?: string|null,
     *     checksum?: string|null,
     *     createVersion?: bool|null,
     *     kendraConfiguration?: Shapes\KendraConfiguration|null,
     *     inputContexts?: list<Shapes\InputContext>|null,
     *     outputContexts?: list<Shapes\OutputContext>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
