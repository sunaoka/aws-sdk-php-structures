<?php

namespace Sunaoka\Aws\Structures\Iot\GetPolicyVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyArn
 * @property string $policyName
 * @property string $policyDocument
 * @property string $policyVersionId
 * @property bool $isDefaultVersion
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property string $generationId
 */
class GetPolicyVersionResponse extends Response
{
}
