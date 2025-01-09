<?php

namespace Sunaoka\Aws\Structures\Lambda\GetCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeSigningConfigArn
 */
class GetCodeSigningConfigRequest extends Request
{
    /**
     * @param array{CodeSigningConfigArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
