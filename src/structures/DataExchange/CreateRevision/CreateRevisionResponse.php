<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateRevision;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Comment
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DataSetId
 * @property bool $Finalized
 * @property string $Id
 * @property string $SourceId
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $RevocationComment
 * @property bool $Revoked
 * @property \Aws\Api\DateTimeResult $RevokedAt
 */
class CreateRevisionResponse extends Response
{
}
