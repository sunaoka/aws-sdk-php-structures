<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateRevision;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Comment
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DataSetId
 * @property bool|null $Finalized
 * @property string|null $Id
 * @property string|null $SourceId
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $RevocationComment
 * @property bool|null $Revoked
 * @property \Aws\Api\DateTimeResult|null $RevokedAt
 */
class UpdateRevisionResponse extends Response
{
}
