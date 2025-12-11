<?php

namespace Sunaoka\Aws\Structures\DataZone\PutDataExportConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property bool $enableExport
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class PutDataExportConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     enableExport: bool,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
