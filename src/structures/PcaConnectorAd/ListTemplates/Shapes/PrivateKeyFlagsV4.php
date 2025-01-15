<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WINDOWS_SERVER_2012'|'WINDOWS_SERVER_2012_R2'|'WINDOWS_SERVER_2016' $ClientVersion
 * @property bool|null $ExportableKey
 * @property bool|null $RequireAlternateSignatureAlgorithm
 * @property bool|null $RequireSameKeyRenewal
 * @property bool|null $StrongKeyProtectionRequired
 * @property bool|null $UseLegacyProvider
 */
class PrivateKeyFlagsV4 extends Shape
{
    /**
     * @param array{
     *     ClientVersion: 'WINDOWS_SERVER_2012'|'WINDOWS_SERVER_2012_R2'|'WINDOWS_SERVER_2016',
     *     ExportableKey?: bool|null,
     *     RequireAlternateSignatureAlgorithm?: bool|null,
     *     RequireSameKeyRenewal?: bool|null,
     *     StrongKeyProtectionRequired?: bool|null,
     *     UseLegacyProvider?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
