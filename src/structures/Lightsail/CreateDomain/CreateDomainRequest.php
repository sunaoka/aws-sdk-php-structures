<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property list<Shapes\Tag> $tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
