<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectCustomLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectVersionArn
 * @property Shapes\Image $Image
 * @property int<0, max>|null $MaxResults
 * @property float|null $MinConfidence
 */
class DetectCustomLabelsRequest extends Request
{
    /**
     * @param array{
     *     ProjectVersionArn: string,
     *     Image: Shapes\Image,
     *     MaxResults?: int<0, max>|null,
     *     MinConfidence?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
