<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateOutpostResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $Name
 * @property int|null $InstanceCount
 * @property string $PreferredInstanceType
 * @property string $OutpostArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateOutpostResolverRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     Name: string,
     *     InstanceCount?: int|null,
     *     PreferredInstanceType: string,
     *     OutpostArn: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
