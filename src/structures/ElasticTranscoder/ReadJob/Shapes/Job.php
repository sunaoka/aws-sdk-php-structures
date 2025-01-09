<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $PipelineId
 * @property JobInput $Input
 * @property list<JobInput> $Inputs
 * @property JobOutput $Output
 * @property list<JobOutput> $Outputs
 * @property string $OutputKeyPrefix
 * @property list<Playlist> $Playlists
 * @property string $Status
 * @property array<string, string> $UserMetadata
 * @property Timing $Timing
 */
class Job extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     PipelineId?: string,
     *     Input?: JobInput,
     *     Inputs?: list<JobInput>,
     *     Output?: JobOutput,
     *     Outputs?: list<JobOutput>,
     *     OutputKeyPrefix?: string,
     *     Playlists?: list<Playlist>,
     *     Status?: string,
     *     UserMetadata?: array<string, string>,
     *     Timing?: Timing
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
