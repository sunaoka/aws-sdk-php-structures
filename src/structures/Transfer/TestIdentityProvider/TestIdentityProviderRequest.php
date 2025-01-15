<?php

namespace Sunaoka\Aws\Structures\Transfer\TestIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property 'SFTP'|'FTP'|'FTPS'|'AS2'|null $ServerProtocol
 * @property string|null $SourceIp
 * @property string $UserName
 * @property string|null $UserPassword
 */
class TestIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     ServerProtocol?: 'SFTP'|'FTP'|'FTPS'|'AS2'|null,
     *     SourceIp?: string|null,
     *     UserName: string,
     *     UserPassword?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
