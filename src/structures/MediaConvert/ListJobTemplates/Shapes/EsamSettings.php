<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EsamManifestConfirmConditionNotification|null $ManifestConfirmConditionNotification
 * @property int<0, 30000>|null $ResponseSignalPreroll
 * @property EsamSignalProcessingNotification|null $SignalProcessingNotification
 */
class EsamSettings extends Shape
{
    /**
     * @param array{
     *     ManifestConfirmConditionNotification?: EsamManifestConfirmConditionNotification|null,
     *     ResponseSignalPreroll?: int<0, 30000>|null,
     *     SignalProcessingNotification?: EsamSignalProcessingNotification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
