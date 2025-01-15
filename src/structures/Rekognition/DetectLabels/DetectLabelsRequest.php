<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $Image
 * @property int<0, max>|null $MaxLabels
 * @property float|null $MinConfidence
 * @property list<'GENERAL_LABELS'|'IMAGE_PROPERTIES'>|null $Features
 * @property Shapes\DetectLabelsSettings|null $Settings
 */
class DetectLabelsRequest extends Request
{
    /**
     * @param array{
     *     Image: Shapes\Image,
     *     MaxLabels?: int<0, max>|null,
     *     MinConfidence?: float|null,
     *     Features?: list<'GENERAL_LABELS'|'IMAGE_PROPERTIES'>|null,
     *     Settings?: Shapes\DetectLabelsSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
