<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataProviderIdentifier
 * @property string $DataProviderName
 * @property string $Description
 * @property string $Engine
 * @property bool $ExactSettings
 * @property Shapes\DataProviderSettings $Settings
 */
class ModifyDataProviderRequest extends Request
{
    /**
     * @param array{
     *     DataProviderIdentifier: string,
     *     DataProviderName?: string,
     *     Description?: string,
     *     Engine?: string,
     *     ExactSettings?: bool,
     *     Settings?: Shapes\DataProviderSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
