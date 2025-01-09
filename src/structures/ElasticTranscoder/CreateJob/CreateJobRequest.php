<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineId
 * @property Shapes\JobInput $Input
 * @property list<Shapes\JobInput> $Inputs
 * @property Shapes\CreateJobOutput $Output
 * @property list<Shapes\CreateJobOutput> $Outputs
 * @property string $OutputKeyPrefix
 * @property list<Shapes\CreateJobPlaylist> $Playlists
 * @property array<string, string> $UserMetadata
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     PipelineId: string,
     *     Input?: Shapes\JobInput,
     *     Inputs?: list<Shapes\JobInput>,
     *     Output?: Shapes\CreateJobOutput,
     *     Outputs?: list<Shapes\CreateJobOutput>,
     *     OutputKeyPrefix?: string,
     *     Playlists?: list<Shapes\CreateJobPlaylist>,
     *     UserMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
