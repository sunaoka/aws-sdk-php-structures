<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectModerationLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $Image
 * @property float|null $MinConfidence
 * @property Shapes\HumanLoopConfig|null $HumanLoopConfig
 */
class DetectModerationLabelsRequest extends Request
{
    /**
     * @param array{
     *     Image: Shapes\Image,
     *     MinConfidence?: float|null,
     *     HumanLoopConfig?: Shapes\HumanLoopConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
