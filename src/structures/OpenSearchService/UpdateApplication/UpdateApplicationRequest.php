<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<Shapes\DataSource>|null $dataSources
 * @property list<Shapes\AppConfig>|null $appConfigs
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     dataSources?: list<Shapes\DataSource>|null,
     *     appConfigs?: list<Shapes\AppConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
