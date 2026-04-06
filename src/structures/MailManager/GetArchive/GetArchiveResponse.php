<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchive;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArchiveArn
 * @property string $ArchiveId
 * @property string $ArchiveName
 * @property 'ACTIVE'|'PENDING_DELETION' $ArchiveState
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property string|null $KmsKeyArn
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property Shapes\ArchiveRetention $Retention
 */
class GetArchiveResponse extends Response
{
}
