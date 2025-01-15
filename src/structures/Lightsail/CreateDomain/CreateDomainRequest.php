<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
