<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppInputSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string|null $clientToken
 * @property Shapes\EksSourceClusterNamespace|null $eksSourceClusterNamespace
 * @property string|null $sourceArn
 * @property Shapes\TerraformSource|null $terraformSource
 */
class DeleteAppInputSourceRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     clientToken?: string|null,
     *     eksSourceClusterNamespace?: Shapes\EksSourceClusterNamespace|null,
     *     sourceArn?: string|null,
     *     terraformSource?: Shapes\TerraformSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
