<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $name
 * @property Shapes\DatasetConfig $config
 * @property string|null $clientToken
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     name: string,
     *     config: Shapes\DatasetConfig,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
