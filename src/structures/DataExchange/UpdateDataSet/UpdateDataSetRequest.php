<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $Description
 * @property string $Name
 */
class UpdateDataSetRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     Description?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
