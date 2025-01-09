<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppInputSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $clientToken
 * @property Shapes\EksSourceClusterNamespace $eksSourceClusterNamespace
 * @property string $sourceArn
 * @property Shapes\TerraformSource $terraformSource
 */
class DeleteAppInputSourceRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     clientToken?: string,
     *     eksSourceClusterNamespace?: Shapes\EksSourceClusterNamespace,
     *     sourceArn?: string,
     *     terraformSource?: Shapes\TerraformSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
