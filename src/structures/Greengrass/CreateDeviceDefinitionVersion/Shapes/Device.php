<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeviceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $Id
 * @property bool|null $SyncShadow
 * @property string $ThingArn
 */
class Device extends Shape
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
