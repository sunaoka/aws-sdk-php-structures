<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteColumnStatisticsTaskSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string|null $CatalogID
 */
class DeleteColumnStatisticsTaskSettingsRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     CatalogID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
