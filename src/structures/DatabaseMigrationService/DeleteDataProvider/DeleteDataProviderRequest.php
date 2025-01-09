<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataProviderIdentifier
 */
class DeleteDataProviderRequest extends Request
{
    /**
     * @param array{DataProviderIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
