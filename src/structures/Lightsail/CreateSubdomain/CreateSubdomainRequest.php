<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateSubdomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subdomainName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateSubdomainRequest extends Request
{
    /**
     * @param array{
     *     subdomainName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
