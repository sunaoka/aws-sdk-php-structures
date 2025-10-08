<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Name
 * @property string|null $Environment
 * @property string|null $AwsAccountId
 */
class ServiceEntity extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Name?: string|null,
     *     Environment?: string|null,
     *     AwsAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
