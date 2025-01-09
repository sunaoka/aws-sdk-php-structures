<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $prefix
 * @property string $branchName
 */
class SubDomainSetting extends Shape
{
    /**
     * @param array{
     *     prefix: string,
     *     branchName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
