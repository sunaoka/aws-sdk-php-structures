<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow;

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
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $version
 * @property Shapes\FlowDefinition|null $definition
 */
class CreateFlowResponse extends Response
{
}
