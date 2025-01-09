<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $deletionProtectionEnabled
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     deletionProtectionEnabled?: bool,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
