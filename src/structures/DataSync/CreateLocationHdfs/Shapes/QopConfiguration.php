<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationHdfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'AUTHENTICATION'|'INTEGRITY'|'PRIVACY' $RpcProtection
 * @property 'DISABLED'|'AUTHENTICATION'|'INTEGRITY'|'PRIVACY' $DataTransferProtection
 */
class QopConfiguration extends Shape
{
    /**
     * @param array{
     *     RpcProtection?: 'DISABLED'|'AUTHENTICATION'|'INTEGRITY'|'PRIVACY',
     *     DataTransferProtection?: 'DISABLED'|'AUTHENTICATION'|'INTEGRITY'|'PRIVACY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
