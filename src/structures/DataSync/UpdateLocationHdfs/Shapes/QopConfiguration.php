<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationHdfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'AUTHENTICATION'|'INTEGRITY'|'PRIVACY'|null $RpcProtection
 * @property 'DISABLED'|'AUTHENTICATION'|'INTEGRITY'|'PRIVACY'|null $DataTransferProtection
 */
class QopConfiguration extends Shape
{
    /**
     * @param array{
     *     RpcProtection?: 'DISABLED'|'AUTHENTICATION'|'INTEGRITY'|'PRIVACY'|null,
     *     DataTransferProtection?: 'DISABLED'|'AUTHENTICATION'|'INTEGRITY'|'PRIVACY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
