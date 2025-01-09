<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartProjectVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectVersionArn
 * @property int $MinInferenceUnits
 * @property int $MaxInferenceUnits
 */
class StartProjectVersionRequest extends Request
{
    /**
     * @param array{
     *     ProjectVersionArn: string,
     *     MinInferenceUnits: int,
     *     MaxInferenceUnits?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
