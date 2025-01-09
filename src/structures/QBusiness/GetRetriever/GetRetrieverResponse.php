<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetRetriever;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property string $retrieverId
 * @property string $retrieverArn
 * @property 'NATIVE_INDEX'|'KENDRA_INDEX' $type
 * @property 'CREATING'|'ACTIVE'|'FAILED' $status
 * @property string $displayName
 * @property Shapes\RetrieverConfiguration $configuration
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetRetrieverResponse extends Response
{
}
