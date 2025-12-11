<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAutoManagementConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuotaCode
 * @property string|null $QuotaName
 */
class QuotaInfo extends Shape
{
    /**
     * @param array{
     *     QuotaCode?: string|null,
     *     QuotaName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
