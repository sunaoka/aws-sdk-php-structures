<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetExecutionFlowSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $flowIdentifier
 * @property string $flowAliasIdentifier
 * @property string $flowVersion
 * @property string $executionRoleArn
 * @property string $definition
 * @property string|null $customerEncryptionKeyArn
 */
class GetExecutionFlowSnapshotResponse extends Response
{
}
