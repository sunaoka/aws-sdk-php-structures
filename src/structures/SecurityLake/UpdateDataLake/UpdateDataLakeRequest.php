<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DataLakeConfiguration> $configurations
 * @property string|null $metaStoreManagerRoleArn
 */
class UpdateDataLakeRequest extends Request
{
    /**
     * @param array{
     *     configurations: list<Shapes\DataLakeConfiguration>,
     *     metaStoreManagerRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
