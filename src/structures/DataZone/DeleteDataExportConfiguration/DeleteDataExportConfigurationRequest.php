<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataExportConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 */
class DeleteDataExportConfigurationRequest extends Request
{
    /**
     * @param array{domainIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
