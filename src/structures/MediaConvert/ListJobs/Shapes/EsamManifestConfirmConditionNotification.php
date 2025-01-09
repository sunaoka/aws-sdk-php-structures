<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MccXml
 */
class EsamManifestConfirmConditionNotification extends Shape
{
    /**
     * @param array{MccXml?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
