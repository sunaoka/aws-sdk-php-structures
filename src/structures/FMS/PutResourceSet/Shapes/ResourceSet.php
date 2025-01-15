<?php

namespace Sunaoka\Aws\Structures\FMS\PutResourceSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string $Name
 * @property string|null $Description
 * @property string|null $UpdateToken
 * @property list<string> $ResourceTypeList
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'|null $ResourceSetStatus
 */
class ResourceSet extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name: string,
     *     Description?: string|null,
     *     UpdateToken?: string|null,
     *     ResourceTypeList: list<string>,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceSetStatus?: 'ACTIVE'|'OUT_OF_ADMIN_SCOPE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
