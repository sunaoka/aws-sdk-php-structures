<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateOutpostResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property int $InstanceCount
 * @property string $PreferredInstanceType
 */
class UpdateOutpostResolverRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     InstanceCount?: int,
     *     PreferredInstanceType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
