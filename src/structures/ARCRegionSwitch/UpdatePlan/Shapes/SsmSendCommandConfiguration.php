<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property array<string, SsmDocumentConfig> $regionDocuments
 * @property float $retryIntervalMinutes
 * @property SsmSendCommandUngraceful|null $ungraceful
 */
class SsmSendCommandConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     regionDocuments: array<string, SsmDocumentConfig>,
     *     retryIntervalMinutes: float,
     *     ungraceful?: SsmSendCommandUngraceful|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
