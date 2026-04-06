<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyEndpointEncryptionMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'STANDARD_TLS'|'FIPS_VALIDATED' $EndpointEncryptionMode
 */
class ModifyEndpointEncryptionModeRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     EndpointEncryptionMode: 'STANDARD_TLS'|'FIPS_VALIDATED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
