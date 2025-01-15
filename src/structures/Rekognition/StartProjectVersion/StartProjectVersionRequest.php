<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartProjectVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectVersionArn
 * @property int<1, max> $MinInferenceUnits
 * @property int<1, max>|null $MaxInferenceUnits
 */
class StartProjectVersionRequest extends Request
{
    /**
     * @param array{
     *     ProjectVersionArn: string,
     *     MinInferenceUnits: int<1, max>,
     *     MaxInferenceUnits?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
