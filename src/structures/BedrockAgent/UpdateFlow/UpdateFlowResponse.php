<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $customerEncryptionKeyArn
 * @property Shapes\FlowDefinition|null $definition
 * @property string|null $description
 * @property string $executionRoleArn
 * @property string $id
 * @property string $name
 * @property 'Failed'|'Prepared'|'Preparing'|'NotPrepared' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $version
 */
class UpdateFlowResponse extends Response
{
}
