<?php

namespace Sunaoka\Aws\Structures\DataZone\PutDataExportConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property bool $enableExport
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property string|null $clientToken
 */
class PutDataExportConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     enableExport: bool,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
