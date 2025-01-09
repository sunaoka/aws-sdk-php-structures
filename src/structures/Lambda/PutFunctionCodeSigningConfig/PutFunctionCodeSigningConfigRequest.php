<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeSigningConfigArn
 * @property string $FunctionName
 */
class PutFunctionCodeSigningConfigRequest extends Request
{
    /**
     * @param array{
     *     CodeSigningConfigArn: string,
     *     FunctionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
