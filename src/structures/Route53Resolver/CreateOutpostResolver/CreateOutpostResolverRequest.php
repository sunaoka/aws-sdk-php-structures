<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateOutpostResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $Name
 * @property int $InstanceCount
 * @property string $PreferredInstanceType
 * @property string $OutpostArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateOutpostResolverRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     Name: string,
     *     InstanceCount?: int,
     *     PreferredInstanceType: string,
     *     OutpostArn: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
