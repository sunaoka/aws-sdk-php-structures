<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DeleteDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteDatasetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
