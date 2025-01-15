<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataProviderIdentifier
 * @property string|null $DataProviderName
 * @property string|null $Description
 * @property string|null $Engine
 * @property bool|null $ExactSettings
 * @property Shapes\DataProviderSettings|null $Settings
 */
class ModifyDataProviderRequest extends Request
{
    /**
     * @param array{
     *     DataProviderIdentifier: string,
     *     DataProviderName?: string|null,
     *     Description?: string|null,
     *     Engine?: string|null,
     *     ExactSettings?: bool|null,
     *     Settings?: Shapes\DataProviderSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
