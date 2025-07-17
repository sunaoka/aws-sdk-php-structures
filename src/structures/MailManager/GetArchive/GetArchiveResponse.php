<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchive;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArchiveId
 * @property string $ArchiveName
 * @property string $ArchiveArn
 * @property 'ACTIVE'|'PENDING_DELETION' $ArchiveState
 * @property Shapes\ArchiveRetention $Retention
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property string|null $KmsKeyArn
 */
class GetArchiveResponse extends Response
{
}
