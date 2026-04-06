<?php

namespace Sunaoka\Aws\Structures\mgn\CreateWave;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $creationDateTime
 * @property string|null $description
 * @property bool|null $isArchived
 * @property string|null $lastModifiedDateTime
 * @property string|null $name
 * @property array<string, string>|null $tags
 * @property Shapes\WaveAggregatedStatus|null $waveAggregatedStatus
 * @property string|null $waveID
 */
class CreateWaveResponse extends Response
{
}
