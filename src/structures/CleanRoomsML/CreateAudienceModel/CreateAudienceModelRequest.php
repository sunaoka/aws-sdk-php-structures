<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $trainingDataStartTime
 * @property \Aws\Api\DateTimeResult|null $trainingDataEndTime
 * @property string $name
 * @property string $trainingDatasetArn
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 * @property string|null $description
 */
class CreateAudienceModelRequest extends Request
{
    /**
     * @param array{
     *     trainingDataStartTime?: \Aws\Api\DateTimeResult|null,
     *     trainingDataEndTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     trainingDatasetArn: string,
     *     kmsKeyArn?: string|null,
     *     tags?: array<string, string>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
