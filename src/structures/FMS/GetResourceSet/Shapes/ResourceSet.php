<?php

namespace Sunaoka\Aws\Structures\FMS\GetResourceSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property string $UpdateToken
 * @property list<string> $ResourceTypeList
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property 'ACTIVE'|'OUT_OF_ADMIN_SCOPE' $ResourceSetStatus
 */
class ResourceSet extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name: string,
     *     Description?: string,
     *     UpdateToken?: string,
     *     ResourceTypeList: list<string>,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     ResourceSetStatus?: 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
