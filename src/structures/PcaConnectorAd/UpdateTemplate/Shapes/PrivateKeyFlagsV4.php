<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WINDOWS_SERVER_2012'|'WINDOWS_SERVER_2012_R2'|'WINDOWS_SERVER_2016' $ClientVersion
 * @property bool $ExportableKey
 * @property bool $RequireAlternateSignatureAlgorithm
 * @property bool $RequireSameKeyRenewal
 * @property bool $StrongKeyProtectionRequired
 * @property bool $UseLegacyProvider
 */
class PrivateKeyFlagsV4 extends Shape
{
    /**
     * @param array{
     *     ClientVersion: 'WINDOWS_SERVER_2012'|'WINDOWS_SERVER_2012_R2'|'WINDOWS_SERVER_2016',
     *     ExportableKey?: bool,
     *     RequireAlternateSignatureAlgorithm?: bool,
     *     RequireSameKeyRenewal?: bool,
     *     StrongKeyProtectionRequired?: bool,
     *     UseLegacyProvider?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
