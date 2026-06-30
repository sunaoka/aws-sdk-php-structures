<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\DeleteSupportPermit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string|null $description
 * @property Shapes\Permit $permit
 * @property 'ACTIVE'|'INACTIVE'|'DELETING' $status
 * @property Shapes\SigningKeyInfo $signingKeyInfo
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $supportCaseDisplayId
 */
class DeleteSupportPermitResponse extends Response
{
}
