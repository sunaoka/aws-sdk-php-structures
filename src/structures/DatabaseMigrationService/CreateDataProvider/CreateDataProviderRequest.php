<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataProviderName
 * @property string $Description
 * @property string $Engine
 * @property Shapes\DataProviderSettings $Settings
 * @property list<Shapes\Tag> $Tags
 */
class CreateDataProviderRequest extends Request
{
    /**
     * @param array{
     *     DataProviderName?: string,
     *     Description?: string,
     *     Engine: string,
     *     Settings: Shapes\DataProviderSettings,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
