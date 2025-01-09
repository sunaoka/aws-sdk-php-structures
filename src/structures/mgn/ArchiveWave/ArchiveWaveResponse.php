<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveWave;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $creationDateTime
 * @property string $description
 * @property bool $isArchived
 * @property string $lastModifiedDateTime
 * @property string $name
 * @property array<string, string> $tags
 * @property Shapes\WaveAggregatedStatus $waveAggregatedStatus
 * @property string $waveID
 */
class ArchiveWaveResponse extends Response
{
}
