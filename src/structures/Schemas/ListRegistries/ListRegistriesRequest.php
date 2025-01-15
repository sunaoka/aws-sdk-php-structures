<?php

namespace Sunaoka\Aws\Structures\Schemas\ListRegistries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $Limit
 * @property string|null $NextToken
 * @property string|null $RegistryNamePrefix
 * @property string|null $Scope
 */
class ListRegistriesRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int|null,
     *     NextToken?: string|null,
     *     RegistryNamePrefix?: string|null,
     *     Scope?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
