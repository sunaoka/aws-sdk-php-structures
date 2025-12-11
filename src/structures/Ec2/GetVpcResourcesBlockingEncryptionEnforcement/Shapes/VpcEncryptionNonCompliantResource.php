<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpcResourcesBlockingEncryptionEnforcement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Type
 * @property string|null $Description
 * @property bool|null $IsExcludable
 */
class VpcEncryptionNonCompliantResource extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: string|null,
     *     Description?: string|null,
     *     IsExcludable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
