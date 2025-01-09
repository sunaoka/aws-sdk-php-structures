<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<Shapes\DataSource> $dataSources
 * @property list<Shapes\AppConfig> $appConfigs
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     dataSources?: list<Shapes\DataSource>,
     *     appConfigs?: list<Shapes\AppConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
