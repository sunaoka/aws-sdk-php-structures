<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MccXml
 */
class EsamManifestConfirmConditionNotification extends Shape
{
    /**
     * @param array{MccXml?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
