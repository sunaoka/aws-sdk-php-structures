<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string|null $LastStatusCheckDate
 * @property list<string> $Products
 * @property string $Status
 * @property string|null $StatusMessage
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LastStatusCheckDate?: string|null,
     *     Products: list<string>,
     *     Status: string,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
