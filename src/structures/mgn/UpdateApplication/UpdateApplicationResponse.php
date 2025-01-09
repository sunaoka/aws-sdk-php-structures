<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ApplicationAggregatedStatus $applicationAggregatedStatus
 * @property string $applicationID
 * @property string $arn
 * @property string $creationDateTime
 * @property string $description
 * @property bool $isArchived
 * @property string $lastModifiedDateTime
 * @property string $name
 * @property array<string, string> $tags
 * @property string $waveID
 */
class UpdateApplicationResponse extends Response
{
}
