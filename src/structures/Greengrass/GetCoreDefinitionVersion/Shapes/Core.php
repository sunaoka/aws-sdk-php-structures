<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetCoreDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $Id
 * @property bool|null $SyncShadow
 * @property string $ThingArn
 */
class Core extends Shape
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     Id: string,
     *     SyncShadow?: bool|null,
     *     ThingArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
