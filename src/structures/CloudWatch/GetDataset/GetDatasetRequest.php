<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetIdentifier
 */
class GetDatasetRequest extends Request
{
    /**
     * @param array{DatasetIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
