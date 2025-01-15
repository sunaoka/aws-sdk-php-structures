<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartLabelDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string|null $ClientRequestToken
 * @property float|null $MinConfidence
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property string|null $JobTag
 * @property list<'GENERAL_LABELS'>|null $Features
 * @property Shapes\LabelDetectionSettings|null $Settings
 */
class StartLabelDetectionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string|null,
     *     MinConfidence?: float|null,
     *     NotificationChannel?: Shapes\NotificationChannel|null,
     *     JobTag?: string|null,
     *     Features?: list<'GENERAL_LABELS'>|null,
     *     Settings?: Shapes\LabelDetectionSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
