<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EsamManifestConfirmConditionNotification $ManifestConfirmConditionNotification
 * @property int $ResponseSignalPreroll
 * @property EsamSignalProcessingNotification $SignalProcessingNotification
 */
class EsamSettings extends Shape
{
    /**
     * @param array{
     *     ManifestConfirmConditionNotification?: EsamManifestConfirmConditionNotification,
     *     ResponseSignalPreroll?: int,
     *     SignalProcessingNotification?: EsamSignalProcessingNotification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
