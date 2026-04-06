<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteAccessToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property 'CREATING'|'OPERATIONAL'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $deletedAt
 */
class DeleteAccessTokenResponse extends Response
{
}
