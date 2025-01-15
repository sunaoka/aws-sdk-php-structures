<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateOutpostResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property int|null $InstanceCount
 * @property string|null $PreferredInstanceType
 */
class UpdateOutpostResolverRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     InstanceCount?: int|null,
     *     PreferredInstanceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
