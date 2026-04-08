<?php

namespace Sunaoka\Aws\Structures\drs\CreateSourceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vpcID
 * @property string $originAccountID
 * @property string $originRegion
 * @property array<string, string>|null $tags
 */
class CreateSourceNetworkRequest extends Request
{
    /**
     * @param array{
     *     vpcID: string,
     *     originAccountID: string,
     *     originRegion: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
