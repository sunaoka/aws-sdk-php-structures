<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EsamManifestConfirmConditionNotification $ManifestConfirmConditionNotification
 * @property int<0, 30000> $ResponseSignalPreroll
 * @property EsamSignalProcessingNotification $SignalProcessingNotification
 */
class EsamSettings extends Shape
{
    /**
     * @param array{
     *     ManifestConfirmConditionNotification?: EsamManifestConfirmConditionNotification,
     *     ResponseSignalPreroll?: int<0, 30000>,
     *     SignalProcessingNotification?: EsamSignalProcessingNotification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
