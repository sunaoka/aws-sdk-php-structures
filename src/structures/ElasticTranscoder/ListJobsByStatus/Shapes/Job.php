<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $PipelineId
 * @property JobInput|null $Input
 * @property list<JobInput>|null $Inputs
 * @property JobOutput|null $Output
 * @property list<JobOutput>|null $Outputs
 * @property string|null $OutputKeyPrefix
 * @property list<Playlist>|null $Playlists
 * @property string|null $Status
 * @property array<string, string>|null $UserMetadata
 * @property Timing|null $Timing
 */
class Job extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     PipelineId?: string|null,
     *     Input?: JobInput|null,
     *     Inputs?: list<JobInput>|null,
     *     Output?: JobOutput|null,
     *     Outputs?: list<JobOutput>|null,
     *     OutputKeyPrefix?: string|null,
     *     Playlists?: list<Playlist>|null,
     *     Status?: string|null,
     *     UserMetadata?: array<string, string>|null,
     *     Timing?: Timing|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
