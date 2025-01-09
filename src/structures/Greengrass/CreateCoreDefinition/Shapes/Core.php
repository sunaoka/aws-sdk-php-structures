<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateCoreDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $Id
 * @property bool $SyncShadow
 * @property string $ThingArn
 */
class Core extends Shape
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     Id: string,
     *     SyncShadow?: bool,
     *     ThingArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
