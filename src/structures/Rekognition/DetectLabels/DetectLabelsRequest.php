<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $Image
 * @property int<0, max> $MaxLabels
 * @property float $MinConfidence
 * @property list<'GENERAL_LABELS'|'IMAGE_PROPERTIES'> $Features
 * @property Shapes\DetectLabelsSettings $Settings
 */
class DetectLabelsRequest extends Request
{
    /**
     * @param array{
     *     Image: Shapes\Image,
     *     MaxLabels?: int<0, max>,
     *     MinConfidence?: float,
     *     Features?: list<'GENERAL_LABELS'|'IMAGE_PROPERTIES'>,
     *     Settings?: Shapes\DetectLabelsSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
