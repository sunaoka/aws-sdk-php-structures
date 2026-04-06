<?php

namespace Sunaoka\Aws\Structures\mgn\CreateWave;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $waveID
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $isArchived
 * @property Shapes\WaveAggregatedStatus|null $waveAggregatedStatus
 * @property string|null $creationDateTime
 * @property string|null $lastModifiedDateTime
 * @property array<string, string>|null $tags
 */
class CreateWaveResponse extends Response
{
}
