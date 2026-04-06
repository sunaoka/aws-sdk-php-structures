<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DataProviderName
 * @property string|null $Description
 * @property string $Engine
 * @property Shapes\DataProviderSettings $Settings
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDataProviderRequest extends Request
{
    /**
     * @param array{
     *     DataProviderName?: string|null,
     *     Description?: string|null,
     *     Engine: string,
     *     Settings: Shapes\DataProviderSettings,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
