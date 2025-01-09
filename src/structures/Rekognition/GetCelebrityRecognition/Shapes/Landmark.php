<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'eyeLeft'|'eyeRight'|'nose'|'mouthLeft'|'mouthRight'|'leftEyeBrowLeft'|'leftEyeBrowRight'|'leftEyeBrowUp'|'rightEyeBrowLeft'|'rightEyeBrowRight'|'rightEyeBrowUp'|'leftEyeLeft'|'leftEyeRight'|'leftEyeUp'|'leftEyeDown'|'rightEyeLeft'|'rightEyeRight'|'rightEyeUp'|'rightEyeDown'|'noseLeft'|'noseRight'|'mouthUp'|'mouthDown'|'leftPupil'|'rightPupil'|'upperJawlineLeft'|'midJawlineLeft'|'chinBottom'|'midJawlineRight'|'upperJawlineRight' $Type
 * @property float $X
 * @property float $Y
 */
class Landmark extends Shape
{
    /**
     * @param array{
     *     Type?: 'eyeLeft'|'eyeRight'|'nose'|'mouthLeft'|'mouthRight'|'leftEyeBrowLeft'|'leftEyeBrowRight'|'leftEyeBrowUp'|'rightEyeBrowLeft'|'rightEyeBrowRight'|'rightEyeBrowUp'|'leftEyeLeft'|'leftEyeRight'|'leftEyeUp'|'leftEyeDown'|'rightEyeLeft'|'rightEyeRight'|'rightEyeUp'|'rightEyeDown'|'noseLeft'|'noseRight'|'mouthUp'|'mouthDown'|'leftPupil'|'rightPupil'|'upperJawlineLeft'|'midJawlineLeft'|'chinBottom'|'midJawlineRight'|'upperJawlineRight',
     *     X?: float,
     *     Y?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
