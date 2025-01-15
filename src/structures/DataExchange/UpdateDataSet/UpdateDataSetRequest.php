<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string|null $Description
 * @property string|null $Name
 */
class UpdateDataSetRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     Description?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
