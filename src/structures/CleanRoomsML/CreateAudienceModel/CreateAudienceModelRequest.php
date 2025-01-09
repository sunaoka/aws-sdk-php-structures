<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $trainingDataStartTime
 * @property \Aws\Api\DateTimeResult $trainingDataEndTime
 * @property string $name
 * @property string $trainingDatasetArn
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 * @property string $description
 */
class CreateAudienceModelRequest extends Request
{
    /**
     * @param array{
     *     trainingDataStartTime?: \Aws\Api\DateTimeResult,
     *     trainingDataEndTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     trainingDatasetArn: string,
     *     kmsKeyArn?: string,
     *     tags?: array<string, string>,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
