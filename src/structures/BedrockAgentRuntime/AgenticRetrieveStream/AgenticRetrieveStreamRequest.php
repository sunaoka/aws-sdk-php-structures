<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AgenticRetrieveConfiguration $agenticRetrieveConfiguration
 * @property bool|null $generateResponse
 * @property list<Shapes\AgenticRetrieveMessage> $messages
 * @property string|null $nextToken
 * @property Shapes\AgenticRetrievePolicyConfiguration|null $policyConfiguration
 * @property list<Shapes\AgenticRetriever> $retrievers
 * @property Shapes\UserContext|null $userContext
 */
class AgenticRetrieveStreamRequest extends Request
{
    /**
     * @param array{
     *     agenticRetrieveConfiguration: Shapes\AgenticRetrieveConfiguration,
     *     generateResponse?: bool|null,
     *     messages: list<Shapes\AgenticRetrieveMessage>,
     *     nextToken?: string|null,
     *     policyConfiguration?: Shapes\AgenticRetrievePolicyConfiguration|null,
     *     retrievers: list<Shapes\AgenticRetriever>,
     *     userContext?: Shapes\UserContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
