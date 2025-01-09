<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DataLakeConfiguration> $configurations
 * @property string $metaStoreManagerRoleArn
 * @property list<Shapes\Tag> $tags
 */
class CreateDataLakeRequest extends Request
{
    /**
     * @param array{
     *     configurations: list<Shapes\DataLakeConfiguration>,
     *     metaStoreManagerRoleArn: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
