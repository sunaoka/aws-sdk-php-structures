<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WINDOWS_SERVER_2003'|'WINDOWS_SERVER_2008'|'WINDOWS_SERVER_2008_R2'|'WINDOWS_SERVER_2012'|'WINDOWS_SERVER_2012_R2'|'WINDOWS_SERVER_2016' $ClientVersion
 * @property bool $ExportableKey
 * @property bool $StrongKeyProtectionRequired
 */
class PrivateKeyFlagsV2 extends Shape
{
    /**
     * @param array{
     *     ClientVersion: 'WINDOWS_SERVER_2003'|'WINDOWS_SERVER_2008'|'WINDOWS_SERVER_2008_R2'|'WINDOWS_SERVER_2012'|'WINDOWS_SERVER_2012_R2'|'WINDOWS_SERVER_2016',
     *     ExportableKey?: bool,
     *     StrongKeyProtectionRequired?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
