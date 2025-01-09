<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartLabelDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Video $Video
 * @property string $ClientRequestToken
 * @property float $MinConfidence
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property string $JobTag
 * @property list<'GENERAL_LABELS'> $Features
 * @property Shapes\LabelDetectionSettings $Settings
 */
class StartLabelDetectionRequest extends Request
{
    /**
     * @param array{
     *     Video: Shapes\Video,
     *     ClientRequestToken?: string,
     *     MinConfidence?: float,
     *     NotificationChannel?: Shapes\NotificationChannel,
     *     JobTag?: string,
     *     Features?: list<'GENERAL_LABELS'>,
     *     Settings?: Shapes\LabelDetectionSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
