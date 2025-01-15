<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'eyeLeft'|'eyeRight'|'nose'|'mouthLeft'|'mouthRight'|'leftEyeBrowLeft'|'leftEyeBrowRight'|'leftEyeBrowUp'|'rightEyeBrowLeft'|'rightEyeBrowRight'|'rightEyeBrowUp'|'leftEyeLeft'|'leftEyeRight'|'leftEyeUp'|'leftEyeDown'|'rightEyeLeft'|'rightEyeRight'|'rightEyeUp'|'rightEyeDown'|'noseLeft'|'noseRight'|'mouthUp'|'mouthDown'|'leftPupil'|'rightPupil'|'upperJawlineLeft'|'midJawlineLeft'|'chinBottom'|'midJawlineRight'|'upperJawlineRight'|null $Type
 * @property float|null $X
 * @property float|null $Y
 */
class Landmark extends Shape
{
    /**
     * @param array{
     *     Type?: 'eyeLeft'|'eyeRight'|'nose'|'mouthLeft'|'mouthRight'|'leftEyeBrowLeft'|'leftEyeBrowRight'|'leftEyeBrowUp'|'rightEyeBrowLeft'|'rightEyeBrowRight'|'rightEyeBrowUp'|'leftEyeLeft'|'leftEyeRight'|'leftEyeUp'|'leftEyeDown'|'rightEyeLeft'|'rightEyeRight'|'rightEyeUp'|'rightEyeDown'|'noseLeft'|'noseRight'|'mouthUp'|'mouthDown'|'leftPupil'|'rightPupil'|'upperJawlineLeft'|'midJawlineLeft'|'chinBottom'|'midJawlineRight'|'upperJawlineRight'|null,
     *     X?: float|null,
     *     Y?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
