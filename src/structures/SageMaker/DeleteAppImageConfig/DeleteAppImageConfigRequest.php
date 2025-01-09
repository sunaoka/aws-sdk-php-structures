<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAppImageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppImageConfigName
 */
class DeleteAppImageConfigRequest extends Request
{
    /**
     * @param array{AppImageConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
