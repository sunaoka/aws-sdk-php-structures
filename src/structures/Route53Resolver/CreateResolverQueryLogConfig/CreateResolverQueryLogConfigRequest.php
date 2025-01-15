<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverQueryLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $DestinationArn
 * @property string $CreatorRequestId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateResolverQueryLogConfigRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DestinationArn: string,
     *     CreatorRequestId: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
