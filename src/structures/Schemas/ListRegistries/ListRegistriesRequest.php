<?php

namespace Sunaoka\Aws\Structures\Schemas\ListRegistries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $NextToken
 * @property string $RegistryNamePrefix
 * @property string $Scope
 */
class ListRegistriesRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     NextToken?: string,
     *     RegistryNamePrefix?: string,
     *     Scope?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
