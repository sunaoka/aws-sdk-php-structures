<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $customerEncryptionKeyArn
 * @property Shapes\FlowDefinition $definition
 * @property string $description
 * @property string $executionRoleArn
 * @property string $id
 * @property string $name
 * @property 'Failed'|'Prepared'|'Preparing'|'NotPrepared' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<Shapes\FlowValidation> $validations
 * @property string $version
 */
class GetFlowResponse extends Response
{
}
