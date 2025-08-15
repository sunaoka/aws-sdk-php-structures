<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string|null $description
 * @property string $executionRoleArn
 * @property string|null $customerEncryptionKeyArn
 * @property string $id
 * @property string $arn
 * @property 'Failed'|'Prepared'|'Preparing'|'NotPrepared' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $version
 * @property Shapes\FlowDefinition|null $definition
 */
class GetFlowVersionResponse extends Response
{
}
