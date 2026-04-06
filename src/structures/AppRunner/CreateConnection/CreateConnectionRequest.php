<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionName
 * @property 'GITHUB'|'BITBUCKET' $ProviderType
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName: string,
     *     ProviderType: 'GITHUB'|'BITBUCKET',
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
