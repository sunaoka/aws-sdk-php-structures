<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeSigningConfigArn
 */
class DeleteCodeSigningConfigRequest extends Request
{
    /**
     * @param array{CodeSigningConfigArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
