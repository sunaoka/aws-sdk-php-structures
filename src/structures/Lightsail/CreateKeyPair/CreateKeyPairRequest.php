<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyPairName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateKeyPairRequest extends Request
{
    /**
     * @param array{
     *     keyPairName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
