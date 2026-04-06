<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineId
 * @property Shapes\JobInput|null $Input
 * @property list<Shapes\JobInput>|null $Inputs
 * @property Shapes\CreateJobOutput|null $Output
 * @property list<Shapes\CreateJobOutput>|null $Outputs
 * @property string|null $OutputKeyPrefix
 * @property list<Shapes\CreateJobPlaylist>|null $Playlists
 * @property array<string, string>|null $UserMetadata
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     PipelineId: string,
     *     Input?: Shapes\JobInput|null,
     *     Inputs?: list<Shapes\JobInput>|null,
     *     Output?: Shapes\CreateJobOutput|null,
     *     Outputs?: list<Shapes\CreateJobOutput>|null,
     *     OutputKeyPrefix?: string|null,
     *     Playlists?: list<Shapes\CreateJobPlaylist>|null,
     *     UserMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
