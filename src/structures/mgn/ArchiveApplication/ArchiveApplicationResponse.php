<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationID
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $isArchived
 * @property Shapes\ApplicationAggregatedStatus|null $applicationAggregatedStatus
 * @property string|null $creationDateTime
 * @property string|null $lastModifiedDateTime
 * @property array<string, string>|null $tags
 * @property string|null $waveID
 */
class ArchiveApplicationResponse extends Response
{
}
