<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow;

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
 * @property list<Shapes\FlowValidation>|null $validations
 */
class GetFlowResponse extends Response
{
}
