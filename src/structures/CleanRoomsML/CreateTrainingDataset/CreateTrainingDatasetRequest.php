<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainingDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $roleArn
 * @property list<Shapes\Dataset> $trainingData
 * @property array<string, string>|null $tags
 * @property string|null $description
 */
class CreateTrainingDatasetRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     roleArn: string,
     *     trainingData: list<Shapes\Dataset>,
     *     tags?: array<string, string>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
