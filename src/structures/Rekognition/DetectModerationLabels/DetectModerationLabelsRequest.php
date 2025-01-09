<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectModerationLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $Image
 * @property float $MinConfidence
 * @property Shapes\HumanLoopConfig $HumanLoopConfig
 * @property string $ProjectVersion
 */
class DetectModerationLabelsRequest extends Request
{
    /**
     * @param array{
     *     Image: Shapes\Image,
     *     MinConfidence?: float,
     *     HumanLoopConfig?: Shapes\HumanLoopConfig,
     *     ProjectVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
