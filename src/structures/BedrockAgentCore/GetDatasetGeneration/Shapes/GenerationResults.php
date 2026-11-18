<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $sessionsMatched
 * @property int|null $sessionsSelected
 * @property int|null $sessionsUnscored
 * @property int|null $sessionsFailed
 * @property int|null $scenariosGenerated
 * @property int|null $scenariosDeduplicated
 * @property int|null $examplesWritten
 * @property int|null $examplesWithGroundTruth
 */
class GenerationResults extends Shape
{
    /**
     * @param array{
     *     sessionsMatched?: int|null,
     *     sessionsSelected?: int|null,
     *     sessionsUnscored?: int|null,
     *     sessionsFailed?: int|null,
     *     scenariosGenerated?: int|null,
     *     scenariosDeduplicated?: int|null,
     *     examplesWritten?: int|null,
     *     examplesWithGroundTruth?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
