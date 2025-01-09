<?php

namespace Sunaoka\Aws\Structures\drs\CreateSourceNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $originAccountID
 * @property string $originRegion
 * @property array<string, string> $tags
 * @property string $vpcID
 */
class CreateSourceNetworkRequest extends Request
{
    /**
     * @param array{
     *     originAccountID: string,
     *     originRegion: string,
     *     tags?: array<string, string>,
     *     vpcID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
