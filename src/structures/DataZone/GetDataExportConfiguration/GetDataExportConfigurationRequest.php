<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataExportConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 */
class GetDataExportConfigurationRequest extends Request
{
    /**
     * @param array{domainIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
